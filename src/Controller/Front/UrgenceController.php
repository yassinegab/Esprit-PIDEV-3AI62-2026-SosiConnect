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
        $type = $request->request->get('type', 'Assistance');
        $includeLocation = $request->request->get('includeLocation') === 'on';

        $urgence = new Urgence();
        $urgence->setMessage("Demande d'aide : " . $type);
        $urgence->setLatitude($includeLocation ? $latitude : 0);
        $urgence->setLongitude($includeLocation ? $longitude : 0);
        $urgence->setStatut('EN_ATTENTE');
        $urgence->setDateUrgence(new \DateTime());

        $em->persist($urgence);
        $em->flush();

        $contacts = $contactRepo->findAll();
        $smsCount = 0;
        $emailCount = 0;
        $errors = [];
        
        $smsConfigured = $smsService->isConfigured();

        foreach ($contacts as $contact) {
            // Send Email
            if ($contact->getEmail()) {
                try {
                    $emailService->sendUrgencyNotification(
                        $contact->getEmail(),
                        $urgence->getMessage(),
                        $this->getUser() ? $this->getUser()->getFullName() : 'Patient Sosi',
                        $urgence->getLatitude(),
                        $urgence->getLongitude()
                    );
                    $emailCount++;
                } catch (\Exception $e) {
                    $errors[] = 'Erreur Email (' . $contact->getEmail() . ')';
                }
            }

            // Send SMS
            if ($smsConfigured && $contact->getTelephone()) {
                try {
                    $locMsg = $includeLocation ? "\nLocalisation: https://maps.google.com/?q={$latitude},{$longitude}" : "";
                    $smsService->send(
                        $contact->getTelephone(),
                        "SOS SI - ALERTE [{$type}]" . $locMsg
                    );
                    $smsCount++;
                } catch (\Exception $e) {
                    $errors[] = 'Erreur SMS (' . $contact->getTelephone() . ')';
                }
            }
        }

        $msg = "Alerte diffusée ! Emails: {$emailCount}";
        if ($smsConfigured) {
            $msg .= ", SMS: {$smsCount}";
        } else {
            $msg .= " (SMS non configuré)";
        }
        
        $this->addFlash('success', $msg);

        if (count($errors) > 0) {
            $this->addFlash('warning', implode(', ', $errors));
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
                        'Ceci est un test système',
                        'Patient TEST'
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
