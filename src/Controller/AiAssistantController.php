<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\EmotionAnalysis;
use App\Entity\Message;
use App\Entity\UserSession;
use App\Service\DeepgramService;
use App\Service\EmotionAnalysisService;
use App\Service\OpenAITtsService;
use App\Service\OpenRouterService;
use App\Service\RateLimiterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AiAssistantController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private OpenRouterService $openRouterService;
    private DeepgramService $deepgramService;
    private OpenAITtsService $openAITtsService;
    private EmotionAnalysisService $emotionAnalysisService;
    private RateLimiterService $rateLimiterService;

    public function __construct(
        EntityManagerInterface $entityManager,
        OpenRouterService $openRouterService,
        DeepgramService $deepgramService,
        OpenAITtsService $openAITtsService,
        EmotionAnalysisService $emotionAnalysisService,
        RateLimiterService $rateLimiterService
    ) {
        $this->entityManager = $entityManager;
        $this->openRouterService = $openRouterService;
        $this->deepgramService = $deepgramService;
        $this->openAITtsService = $openAITtsService;
        $this->emotionAnalysisService = $emotionAnalysisService;
        $this->rateLimiterService = $rateLimiterService;
    }

    #[Route('/ai-assistant', name: 'ai_assistant_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('ai_assistant/index.html.twig');
    }

    #[Route('/api/stt', name: 'api_stt', methods: ['POST'])]
    public function transcribe(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        if (!$user instanceof UserInterface) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        if (!$this->rateLimiterService->isAllowed('stt_' . $user->getUserIdentifier())) {
            return $this->json([
                'error' => 'Rate limit exceeded. Please wait before making more requests.'
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $audioData = $request->getContent();
        
        if (empty($audioData)) {
            return $this->json(['error' => 'No audio data provided'], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->deepgramService->transcribe($audioData);

        if (!$result['success']) {
            return $this->json([
                'error' => $result['error'] ?? 'Transcription failed'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $this->json([
            'transcript' => $result['transcript'],
            'confidence' => $result['confidence']
        ]);
    }

    #[Route('/api/chat', name: 'api_chat', methods: ['POST'])]
    public function chat(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        if (!$user instanceof UserInterface) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        if (!$this->rateLimiterService->isAllowed('chat_' . $user->getUserIdentifier())) {
            return $this->json([
                'error' => 'Rate limit exceeded. Please wait before making more requests.'
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';
        $conversationId = $data['conversationId'] ?? null;

        if (empty($userMessage)) {
            return $this->json(['error' => 'Empty message'], Response::HTTP_BAD_REQUEST);
        }

        $emotionAnalysisData = $this->emotionAnalysisService->analyze($userMessage);

        $conversation = $this->getOrCreateConversation($conversationId, $user);

        $userMessageEntity = new Message();
        $userMessageEntity->setConversation($conversation);
        $userMessageEntity->setRole('user');
        $userMessageEntity->setContent($userMessage);

        $emotionAnalysis = new EmotionAnalysis();
        $emotionAnalysis->setMessage($userMessageEntity);
        $emotionAnalysis->setMood($emotionAnalysisData['mood']);
        $emotionAnalysis->setStressScore($emotionAnalysisData['stressScore']);
        $emotionAnalysis->setSentiment($emotionAnalysisData['sentiment']);
        $emotionAnalysis->setKeywords($emotionAnalysisData['keywords']);
        $emotionAnalysis->setAnalyzedAt(new \DateTime());

        $userMessageEntity->setEmotionAnalysis($emotionAnalysis);

        $this->entityManager->persist($userMessageEntity);
        $this->entityManager->persist($emotionAnalysis);

        $conversationHistory = $this->getConversationHistory($conversation);

        $aiResponse = $this->openRouterService->chat($userMessage, $conversationHistory);

        $assistantMessage = new Message();
        $assistantMessage->setConversation($conversation);
        $assistantMessage->setRole('assistant');
        $assistantMessage->setContent($aiResponse['content']);

        $this->entityManager->persist($assistantMessage);
        
        $conversation->setUpdatedAt(new \DateTime());
        $this->entityManager->flush();

        return $this->json([
            'response' => $aiResponse['content'],
            'isCrisis' => $aiResponse['isCrisis'] ?? false,
            'conversationId' => $conversation->getId(),
            'emotionAnalysis' => $emotionAnalysisData
        ]);
    }

    #[Route('/api/tts', name: 'api_tts', methods: ['POST'])]
    public function textToSpeech(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        if (!$user instanceof UserInterface) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        if (!$this->rateLimiterService->isAllowed('tts_' . $user->getUserIdentifier())) {
            return $this->json([
                'error' => 'Rate limit exceeded. Please wait before making more requests.'
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';

        if (empty($text)) {
            return $this->json(['error' => 'Empty text'], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->openAITtsService->synthesize($text);

        if (!$result['success']) {
            return $this->json([
                'error' => $result['error'] ?? 'TTS failed'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $this->json([
            'audio' => $result['audio'],
            'contentType' => $result['contentType']
        ]);
    }

    #[Route('/api/conversation/{id}', name: 'api_conversation', methods: ['GET'])]
    public function getConversation(int $id): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $conversation = $this->entityManager->getRepository(Conversation::class)->find($id);

        if (!$conversation) {
            return $this->json(['error' => 'Conversation not found'], Response::HTTP_NOT_FOUND);
        }

        $messages = [];
        foreach ($conversation->getMessages() as $message) {
            $messages[] = [
                'id' => $message->getId(),
                'role' => $message->getRole(),
                'content' => $message->getContent(),
                'createdAt' => $message->getCreatedAt()->format('c'),
                'emotionAnalysis' => $message->getEmotionAnalysis() ? [
                    'mood' => $message->getEmotionAnalysis()->getMood(),
                    'stressScore' => $message->getEmotionAnalysis()->getStressScore(),
                    'sentiment' => $message->getEmotionAnalysis()->getSentiment(),
                    'keywords' => $message->getEmotionAnalysis()->getKeywords()
                ] : null
            ];
        }

        return $this->json([
            'id' => $conversation->getId(),
            'title' => $conversation->getTitle(),
            'createdAt' => $conversation->getCreatedAt()->format('c'),
            'updatedAt' => $conversation->getUpdatedAt()->format('c'),
            'messages' => $messages
        ]);
    }

    private function getOrCreateConversation(?int $conversationId, UserInterface $user): Conversation
    {
        if ($conversationId) {
            $conversation = $this->entityManager->getRepository(Conversation::class)->find($conversationId);
            if ($conversation) {
                return $conversation;
            }
        }

        $userSession = $this->entityManager->getRepository(UserSession::class)->findOneBy([
            'user' => $user,
            'endedAt' => null
        ]);

        if (!$userSession) {
            $userSession = new UserSession();
            $userSession->setUser($user);
            $userSession->setStartedAt(new \DateTime());
            $userSession->setIpAddress('127.0.0.1');
            $userSession->setUserAgent('Web Client');
            $this->entityManager->persist($userSession);
        }

        $conversation = new Conversation();
        $conversation->setUserSession($userSession);
        $conversation->setTitle('New Conversation');
        
        $this->entityManager->persist($conversation);
        $this->entityManager->flush();

        return $conversation;
    }

    private function getConversationHistory(Conversation $conversation): array
    {
        $history = [];
        
        foreach ($conversation->getMessages() as $message) {
            $history[] = [
                'role' => $message->getRole(),
                'content' => $message->getContent()
            ];
        }

        return $history;
    }
}
