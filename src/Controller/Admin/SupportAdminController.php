<?php

namespace App\Controller\Admin;

use App\Entity\ChatMessage;
use App\Entity\SupportTicket;
use App\Repository\SupportTicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/support')]
class SupportAdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_support')]
    public function index(SupportTicketRepository $repository): Response
    {
        return $this->render('admin/aide/support/index.html.twig', [
            'tickets' => $repository->findBy([], ['createdAt' => 'DESC']),
            'stats' => $repository->getStats(),
        ]);
    }

    #[Route('/open', name: 'admin_support_open')]
    public function openTickets(SupportTicketRepository $repository): Response
    {
        return $this->render('admin/aide/support/open.html.twig', [
            'tickets' => $repository->findOpenTickets(),
        ]);
    }

    #[Route('/{id}', name: 'admin_support_view')]
    public function view(SupportTicket $ticket, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $message = new ChatMessage();
            $message->setContent($request->request->get('message'));
            $message->setSenderName('Support');
            $message->setSenderType('admin');
            $message->setTicket($ticket);

            $this->entityManager->persist($message);
            
            if ($ticket->getStatus() === SupportTicket::STATUS_OPEN) {
                $ticket->setStatus(SupportTicket::STATUS_IN_PROGRESS);
            }
            
            $ticket->setUpdatedAt(new \DateTime());
            $this->entityManager->flush();

            $this->addFlash('success', 'Message envoyé');
            return $this->redirectToRoute('admin_support_view', ['id' => $ticket->getId()]);
        }

        return $this->render('admin/aide/support/view.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    #[Route('/{id}/status', name: 'admin_support_status', methods: ['POST'])]
    public function updateStatus(SupportTicket $ticket, Request $request): Response
    {
        $status = $request->request->get('status');
        
        if (in_array($status, [SupportTicket::STATUS_OPEN, SupportTicket::STATUS_IN_PROGRESS, SupportTicket::STATUS_RESOLVED, SupportTicket::STATUS_CLOSED])) {
            $ticket->setStatus($status);
            $ticket->setUpdatedAt(new \DateTime());
            $this->entityManager->flush();
            $this->addFlash('success', 'Statut mis à jour');
        }

        return $this->redirectToRoute('admin_support_view', ['id' => $ticket->getId()]);
    }

    #[Route('/{id}/assign', name: 'admin_support_assign', methods: ['POST'])]
    public function assign(SupportTicket $ticket, Request $request): Response
    {
        $ticket->setAssignedTo($request->request->get('assignedTo'));
        $this->entityManager->flush();

        $this->addFlash('success', 'Ticket assigné');
        return $this->redirectToRoute('admin_support_view', ['id' => $ticket->getId()]);
    }

    #[Route('/{id}/delete', name: 'admin_support_delete', methods: ['POST'])]
    public function delete(SupportTicket $ticket, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $ticket->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide');
            return $this->redirectToRoute('admin_support');
        }

        $this->entityManager->remove($ticket);
        $this->entityManager->flush();

        $this->addFlash('success', 'Ticket supprimé');
        return $this->redirectToRoute('admin_support');
    }
}
