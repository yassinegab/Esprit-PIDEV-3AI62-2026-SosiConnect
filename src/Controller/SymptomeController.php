<?php

namespace App\Controller;

use App\Entity\Symptome;
use App\Entity\Cycle;
use App\Form\SymptomeType;
use App\Repository\SymptomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SymptomeController extends AbstractController
{

private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/symptome', name: 'symptome_index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $symptomesDisponibles = [
            ['label' => 'Maux de tête', 'value' => 'maux_tete'],
            ['label' => 'Crampes', 'value' => 'crampes'],
            ['label' => 'Fatigue', 'value' => 'fatigue'],
            ['label' => 'Ballonnements', 'value' => 'ballonnements'],
        ];

        $intensites = [
            'Très légère 🌱' => 1,
            'Légère 🙂'      => 2,
            'Modérée 😐'     => 3,
            'Forte 😣'       => 4,
            'Très forte 😖'  => 5,
        ];

        $symptomes = $doctrine->getRepository(Symptome::class)->findAll();

        return $this->render('symptome/index.html.twig', [
            'symptomesDisponibles' => $symptomesDisponibles,
            'intensites' => $intensites,
            'symptomes' => $symptomes,
        ]);
    }


    #[Route('/symptome/create', name: 'symptome_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        foreach ($data as $s) {
            $symptome = new Symptome();
            $symptome->setType($s['type']);
            $symptome->setIntensite($s['intensite']);
            $symptome->setDateObservation(new \DateTime($s['dateObservation']));

            if (isset($s['cycle'])) {
                $cycle = $em->getRepository(Cycle::class)->find($s['cycle']);
                if ($cycle) {
                    $symptome->setCycle($cycle);
                }
            }

            $em->persist($symptome);
        }

        $em->flush();

        return new JsonResponse(['status' => 'success']);
    }
    #[Route('/symptome/{id}/edit', name: 'symptome_edit')]
    public function edit(Request $request, Symptome $symptome, EntityManagerInterface $em): Response
   {
    // Création du formulaire lié à l'entité Symptome
    $form = $this->createForm(SymptomeType::class, $symptome);

    // Traitement de la requête
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($symptome);
        $em->flush();

        $this->addFlash('success', 'Symptôme modifié avec succès !');
        return $this->redirectToRoute('symptome_index');
    }

    return $this->render('symptome/edit.html.twig', [
        'form' => $form->createView(),
        'symptome' => $symptome,
    ]);
   } 
  #[Route('/symptome/list', name: 'symptome_list')]
  public function list(SymptomeRepository $symptomeRepository): Response
 {
    $symptomes = $symptomeRepository->findAll();

    return $this->render('symptome/list.html.twig', [
        'symptomes' => $symptomes,
    ]);
 }
  
#[Route('/ai/chat', name: 'ai_chat', methods: ['POST'])]
public function chat(Request $request, HttpClientInterface $httpClient): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $userMessage = $data['message'] ?? '';

    if (empty(trim($userMessage))) {
        return new JsonResponse(['reply' => 'Le message est vide. 🌸']);
    }

    $apiKey = $_ENV['GROQ_API_KEY'] ?? $_ENV['GROK_API_KEY'] ?? '';
    if (empty($apiKey)) {
        return new JsonResponse(['reply' => 'Configuration API manquante. Contactez l’administrateur.']);
    }

    $systemPrompt = <<<PROMPT
You are a medical assistant chatbot for a wellness app. You must ONLY answer medical and health-related questions (symptoms, cycle, nutrition, mental health, etc.). 
If the user asks something NOT related to medicine or health, politely decline and invite them to ask a medical question. Example: "Je ne peux répondre qu’aux questions médicales et de santé. Posez-moi une question dans ce domaine. 🌸" or "I can only answer medical and health questions. Please ask me something in that area. 🌸"
Always respond in the SAME language the user uses: if they write in French, respond in French; if they write in English, respond in English.
Be helpful, clear, and professional. Never replace a doctor's consultation for serious concerns—suggest consulting a healthcare professional when appropriate.
PROMPT;

    try {
        $url = 'https://api.groq.com/openai/v1/chat/completions';

        $response = $httpClient->request('POST', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey,
            ],
            'json' => [
                'model' => 'llama-3.3-70b-versatile',
                'messages' => [
                    ['role' => 'system', 'content' => $systemPrompt],
                    ['role' => 'user', 'content' => trim($userMessage)],
                ],
                'temperature' => 0.5,
                'max_tokens' => 1024,
            ],
        ]);

        $result = $response->toArray(false);

        if (isset($result['choices'][0]['message']['content'])) {
            $aiText = trim($result['choices'][0]['message']['content']);
            return new JsonResponse(['reply' => $aiText]);
        }

        if (isset($result['error'])) {
            $errorMsg = $result['error']['message'] ?? $result['error']['error']['message'] ?? 'Erreur inconnue';
            return new JsonResponse([
                'reply' => 'Désolé, le service est indisponible : ' . $errorMsg,
            ], 200);
        }

        return new JsonResponse(['reply' => "L'IA n'a pas pu répondre. Réessayez dans un instant."]);

    } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
        $statusCode = $e->getResponse()->getStatusCode();
        try {
            $body = $e->getResponse()->toArray(false);
            $errorMsg = $body['error']['message'] ?? $body['error']['error']['message'] ?? $e->getMessage();
        } catch (\Exception $_) {
            $errorMsg = $e->getMessage();
        }
        return new JsonResponse(['reply' => 'Erreur API (' . $statusCode . ') : ' . $errorMsg], 200);
    } catch (\Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface $e) {
        return new JsonResponse(['reply' => 'Le serveur API est temporairement indisponible. Réessayez plus tard.'], 200);
    } catch (\Exception $e) {
        return new JsonResponse(['reply' => 'Erreur : ' . $e->getMessage()], 200);
    }
}
}