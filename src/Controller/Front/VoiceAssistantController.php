<?php

namespace App\Controller\Front;

use App\Entity\Urgence;
use App\Repository\ContactUrgenceRepository;
use App\Service\VoiceAssistantService;
use App\Service\SmsService;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/voice')]
class VoiceAssistantController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $em
    ) {}

    #[Route('/process', name: 'voice_process', methods: ['POST'])]
    public function process(
        Request $request, 
        VoiceAssistantService $voiceAssistant,
        ContactUrgenceRepository $contactRepo,
        SmsService $smsService,
        EmailService $emailService
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';
        $latitude = $data['latitude'] ?? null;
        $longitude = $data['longitude'] ?? null;

        if (empty($text)) {
            return $this->json([
                'success' => false,
                'response' => 'Je n\'ai rien entendu. Parlez plus fort.',
            ]);
        }

        $result = $voiceAssistant->processCommand($text);

        $response = [
            'success' => $result['success'],
            'response' => $result['response'],
            'original' => $text,
            'command' => $result['command'] ?? null,
        ];

        // Handle auto-action for emergency
        if (isset($result['auto_action']) && $result['auto_action'] === 'declare_urgence') {
            $urgenceResult = $this->declareUrgence(
                $latitude, 
                $longitude, 
                $contactRepo, 
                $smsService, 
                $emailService
            );
            
            $response['urgence_declared'] = true;
            $response['urgence_id'] = $urgenceResult['id'];
            $response['sms_sent'] = $urgenceResult['sms_count'];
            $response['emails_sent'] = $urgenceResult['email_count'];
            $response['response'] = sprintf(
                '🚨 URGENCE DÉCLARÉE ! %d SMS et %d emails envoyés. Redirection...',
                $urgenceResult['sms_count'],
                $urgenceResult['email_count']
            );
        }

        if (isset($result['route'])) {
            $response['redirect'] = $this->generateUrl($result['route']);
        }

        return $this->json($response);
    }

    private function declareUrgence(
        ?float $latitude, 
        ?float $longitude,
        ContactUrgenceRepository $contactRepo,
        SmsService $smsService,
        EmailService $emailService
    ): array {
        // Default location if not provided (Tunis)
        $latitude = $latitude ?? 36.8065;
        $longitude = $longitude ?? 10.1815;

        // Create urgency
        $urgence = new Urgence();
        $urgence->setMessage('Urgence déclarée par commande vocale');
        $urgence->setLatitude($latitude);
        $urgence->setLongitude($longitude);
        $urgence->setStatut('EN_ATTENTE');
        $urgence->setDateUrgence(new \DateTime());

        $this->em->persist($urgence);
        $this->em->flush();

        // Send notifications to all contacts
        $contacts = $contactRepo->findAll();
        $smsCount = 0;
        $emailCount = 0;

        foreach ($contacts as $contact) {
            // Send SMS
            if ($contact->getTelephone()) {
                try {
                    $smsService->send(
                        $contact->getTelephone(),
                        "🚨 URGENCE!\nLocalisation: https://maps.google.com/?q={$latitude},{$longitude}\n" .
                        "Date: " . date('d/m/Y H:i') . "\nDéclenché par commande vocale."
                    );
                    $smsCount++;
                } catch (\Exception $e) {
                    // Log error but continue
                }
            }

            // Send Email
            if ($contact->getEmail()) {
                try {
                    $emailService->sendUrgencyNotification(
                        $contact->getEmail(),
                        $contact->getNom() ?? 'Contact',
                        $urgence
                    );
                    $emailCount++;
                } catch (\Exception $e) {
                    // Log error but continue
                }
            }
        }

        return [
            'id' => $urgence->getId(),
            'sms_count' => $smsCount,
            'email_count' => $emailCount,
        ];
    }

    #[Route('/tip', name: 'voice_tip')]
    public function tip(VoiceAssistantService $voiceAssistant): JsonResponse
    {
        return $this->json([
            'tip' => $voiceAssistant->getHealthTip('sante'),
        ]);
    }

    #[Route('/commands', name: 'voice_commands')]
    public function commands(VoiceAssistantService $voiceAssistant): JsonResponse
    {
        return $this->json([
            'commands' => $voiceAssistant->getAvailableCommands(),
        ]);
    }
}
