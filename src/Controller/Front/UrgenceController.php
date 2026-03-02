<?php

namespace App\Controller\Front;

use App\Entity\Urgence;
use App\Repository\ContactUrgenceRepository;
use App\Repository\UrgenceRepository;
use App\Service\SmsService;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/aide/urgence')]
class UrgenceController extends AbstractController
{
    #[Route('/', name: 'urgence_index')]
    public function index(UrgenceRepository $repo): Response
    {
        return $this->render('front/urgence/index.html.twig', [
            'urgences' => $repo->findBy([], ['dateUrgence' => 'DESC']),
        ]);
    }

    #[Route('/send', name: 'urgence_send', methods: ['POST'])]
    public function send(
        Request $request,
        EntityManagerInterface $em,
        ContactUrgenceRepository $contactRepo,
        SmsService $smsService,
        EmailService $emailService
    ): Response {
        $latitude = (float) $request->request->get('latitude', 0);
        $longitude = (float) $request->request->get('longitude', 0);

        $urgence = new Urgence();
        $urgence->setMessage('Urgence declenchee');
        $urgence->setLatitude($latitude);
        $urgence->setLongitude($longitude);
        $urgence->setStatut('EN_ATTENTE');
        $urgence->setDateUrgence(new \DateTime());

        $em->persist($urgence);
        $em->flush();

        $contacts = $contactRepo->findAll();
        $smsCount = 0;
        $emailCount = 0;
        $errors = [];
        $debugInfo = [];

        foreach ($contacts as $contact) {
            $debugInfo[] = 'Contact: ' . $contact->getNom() . ' - Email: ' . ($contact->getEmail() ?: 'none');
            
            // Send Email first (more reliable)
            if ($contact->getEmail()) {
                try {
                    $emailService->sendUrgencyNotification(
                        $contact->getEmail(),
                        $contact->getNom() ?? 'Contact',
                        $urgence
                    );
                    $emailCount++;
                    $debugInfo[] = 'Email sent to: ' . $contact->getEmail();
                } catch (\Exception $e) {
                    $errors[] = 'Email error for ' . $contact->getEmail() . ': ' . $e->getMessage();
                    $debugInfo[] = 'Email FAILED: ' . $e->getMessage();
                }
            }

            // Send SMS
            if ($contact->getTelephone()) {
                try {
                    $smsService->send(
                        $contact->getTelephone(),
                        "URGENCE !\nLocalisation: https://maps.google.com/?q={$latitude},{$longitude}\nDate: " . date('d/m/Y H:i')
                    );
                    $smsCount++;
                } catch (\Exception $e) {
                    $errors[] = 'SMS error: ' . $e->getMessage();
                }
            }
        }

        $this->addFlash('success', "URGENCE ENVOYEE ! SMS: {$smsCount}, Emails: {$emailCount}");
        $this->addFlash('info', implode(' | ', $debugInfo));

        if (count($errors) > 0) {
            $this->addFlash('error', implode(', ', $errors));
        }

        return $this->redirectToRoute('urgence_index');
    }

    #[Route('/delete/{id}', name: 'urgence_delete', methods: ['POST'])]
    public function delete(
        Urgence $urgence,
        EntityManagerInterface $em
    ): Response {
        $em->remove($urgence);
        $em->flush();

        $this->addFlash('success', 'Urgence supprimée');

        return $this->redirectToRoute('urgence_index');
    }

    #[Route('/test-email', name: 'urgence_test_email')]
    public function testEmail(
        EmailService $emailService,
        ContactUrgenceRepository $contactRepo
    ): Response {
        $contacts = $contactRepo->findAll();
        $results = [];

        foreach ($contacts as $contact) {
            if ($contact->getEmail()) {
                try {
                    $urgence = new Urgence();
                    $urgence->setMessage('Test');
                    $urgence->setLatitude(36.8065);
                    $urgence->setLongitude(10.1815);
                    $urgence->setStatut('TEST');
                    $urgence->setDateUrgence(new \DateTime());

                    $emailService->sendUrgencyNotification(
                        $contact->getEmail(),
                        $contact->getNom() ?? 'Contact',
                        $urgence
                    );
                    $results[] = 'OK: ' . $contact->getEmail();
                } catch (\Exception $e) {
                    $results[] = 'ERROR: ' . $contact->getEmail() . ' - ' . $e->getMessage();
                }
            }
        }

        return new Response('<pre>' . implode("\n", $results) . '</pre>');
    }
}
