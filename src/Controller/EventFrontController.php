<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\EventMailerService;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

final class EventFrontController extends AbstractController
{
    /**
     * Liste les événements publics (à venir) accessibles depuis l'interface utilisateur.
     *
     * @param EventRepository $eventRepository
     * @return Response
     */
    #[Route('/events', name: 'events_index')]
    public function index(EventRepository $eventRepository): Response
    {
        // récupère uniquement les événements qui n'ont pas encore eu lieu
        $events = $eventRepository->findUpcoming();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/events/{id}/attend', name: 'event_attend', methods: ['POST'])]
    public function attend(Event $event, Request $request, EventMailerService $mailer): RedirectResponse
    {
        // Vérifie le token CSRF
        if (!$this->isCsrfTokenValid('attend-event'.$event->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token invalide.');
        }

        $user = $this->getUser();

        try {
            // Envoie l'email à l'adresse fixe, avec ou sans utilisateur connecté
            $mailer->sendAttendanceConfirmation($event, 'souha.mabrouk@esprit.tn', $user)       ;
            $this->addFlash('success', 'Un e-mail de confirmation a été envoyé.');
        } catch (TransportExceptionInterface $e) {
            $this->addFlash('error', 'Impossible d\'envoyer l\'e-mail : '.$e->getMessage());
        }

        return $this->redirectToRoute('events_index');
    }
}
