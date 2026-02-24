<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenRouterService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;
    private string $model;

    private const SYSTEM_PROMPT = <<<'PROMPT'
You are a compassionate AI Mental Wellness Coach. Your role is to:
- Provide emotional support and active listening
- Offer stress management techniques
- Suggest mindfulness and relaxation exercises
- Ask thoughtful questions to understand the user's feelings
- NEVER diagnose medical conditions
- NEVER replace professional mental health care
- If user expresses crisis (self-harm, suicide), immediately encourage professional help

Guidelines:
- Keep responses under 150 words
- Use warm, empathetic tone
- Be conversational, not clinical
- Ask follow-up questions when appropriate
- Suggest professional help if needed
- Remember context from previous messages
PROMPT;

    private const CRISIS_KEYWORDS = [
        'self-harm', 'suicide', 'kill myself', 'hurt myself', 'end it all',
        'want to die', 'better off dead', 'no reason to live', 'end my life',
        'harm myself', 'cut myself', 'overdose'
    ];

    public function __construct(
        #[Autowire('%env(OPENROUTER_API_KEY)%')] string $openRouterApiKey,
        string $model = 'anthropic/claude-3-haiku'
    ) {
        $this->httpClient = HttpClient::create();
        $this->apiKey = $openRouterApiKey;
        $this->model = $model;
    }

    public function chat(string $userMessage, array $conversationHistory = []): array
    {
        $isCrisis = $this->detectCrisis($userMessage);

        $messages = array_merge([
            ['role' => 'system', 'content' => self::SYSTEM_PROMPT]
        ], $conversationHistory);

        $messages[] = ['role' => 'user', 'content' => $userMessage];

        if ($isCrisis) {
            return [
                'content' => $this->getCrisisResponse(),
                'isCrisis' => true
            ];
        }

        try {
            $response = $this->httpClient->request('POST', 'https://openrouter.ai/api/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                    'HTTP-Referer' => 'https://chatwell.local',
                    'X-Title' => 'ChatWell AI Assistant'
                ],
                'json' => [
                    'model' => $this->model,
                    'messages' => $messages,
                    'max_tokens' => 500,
                    'temperature' => 0.7
                ]
            ]);

            $data = $response->toArray();

            return [
                'content' => $data['choices'][0]['message']['content'] ?? 'I apologize, but I encountered an issue. Please try again.',
                'isCrisis' => false
            ];
        } catch (ClientExceptionInterface $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode(false);
            
            if ($statusCode === 402) {
                return [
                    'content' => 'I apologize, but the AI service is currently unavailable due to insufficient credits. Please check your OpenRouter account balance.',
                    'isCrisis' => false,
                    'error' => 'Payment Required (402)'
                ];
            }

            return [
                'content' => 'I apologize, but I\'m having trouble connecting right now. Please try again in a moment.',
                'isCrisis' => false,
                'error' => $e->getMessage()
            ];
        } catch (TransportExceptionInterface|DecodingExceptionInterface|RedirectionExceptionInterface|ServerExceptionInterface $e) {
            return [
                'content' => 'I apologize, but I\'m having trouble connecting right now. Please try again in a moment.',
                'isCrisis' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    private function detectCrisis(string $message): bool
    {
        $lowercaseMessage = strtolower($message);
        
        foreach (self::CRISIS_KEYWORDS as $keyword) {
            if (str_contains($lowercaseMessage, $keyword)) {
                return true;
            }
        }
        
        return false;
    }

    private function getCrisisResponse(): string
    {
        return <<<'RESPONSE'
I hear you, and I want you to know that your feelings matter. It takes courage to share what you're going through.

I'm concerned about you right now, and I want to help you get the support you need. Please consider reaching out to a professional who can help:

**Crisis Helpline (US):** 988 (call or text)
**International Association for Suicide Prevention:** https://www.iasp.info/resources/Crisis_Centres/

If you're in immediate danger, please call emergency services (911) or go to your nearest emergency room.

You don't have to face this alone. A trained counselor is available 24/7 to support you. Would you like to talk about what led to these feelings, or would you prefer some breathing exercises to help you feel calmer?

Remember: Your life has value, and there are people who care about you and want to help.
RESPONSE;
    }
}
