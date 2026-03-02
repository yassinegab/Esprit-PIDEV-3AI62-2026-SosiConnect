<?php

namespace App\Controller\Admin;

use App\Entity\DemandeDon;
use App\Service\DonorMatchingService;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/don/matching')]
class MatchingAdminController extends AbstractController
{
    public function __construct(
        private readonly DonorMatchingService $matchingService,
        private readonly NotificationService $notificationService,
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('', name: 'admin_matching')]
    public function index(): Response
    {
        $autoMatches = $this->matchingService->autoMatchDonations();

        return $this->render('admin/don/matching/index.html.twig', [
            'autoMatches' => $autoMatches,
        ]);
    }

    #[Route('/demande/{id}', name: 'admin_matching_demande')]
    public function matchDemande(DemandeDon $demande): Response
    {
        $matches = $this->matchingService->findMatchingDonors($demande);

        return $this->render('admin/don/matching/demande.html.twig', [
            'demande' => $demande,
            'matches' => $matches,
        ]);
    }

    #[Route('/notify/{demandeId}/{donorId}', name: 'admin_matching_notify', methods: ['POST'])]
    public function notifyDonor(int $demandeId, int $donorId, Request $request): Response
    {
        $demande = $this->entityManager->getRepository(DemandeDon::class)->find($demandeId);
        $donor = $this->entityManager->getRepository(\App\Entity\Donneur::class)->find($donorId);

        if (!$demande || !$donor) {
            $this->addFlash('error', 'Demande ou donneur introuvable');
            return $this->redirectToRoute('admin_matching');
        }

        $score = $this->matchingService->calculateMatchScore($donor, $demande);
        $this->notificationService->sendDonorMatchNotification($donor, $demande, $score);

        $this->addFlash('success', sprintf('Notification envoyée à %s %s', $donor->getPrenom(), $donor->getNom()));
        return $this->redirectToRoute('admin_matching_demande', ['id' => $demandeId]);
    }

    #[Route('/notify-all/{demandeId}', name: 'admin_matching_notify_all', methods: ['POST'])]
    public function notifyAllMatches(int $demandeId): Response
    {
        $demande = $this->entityManager->getRepository(DemandeDon::class)->find($demandeId);

        if (!$demande) {
            $this->addFlash('error', 'Demande introuvable');
            return $this->redirectToRoute('admin_matching');
        }

        $matches = $this->matchingService->findMatchingDonors($demande);
        $topMatches = array_slice($matches, 0, 5);

        if ($demande->isUrgence()) {
            $this->notificationService->sendUrgentDonationRequest($demande, $topMatches);
        } else {
            foreach ($topMatches as $match) {
                $this->notificationService->sendDonorMatchNotification(
                    $match['donor'],
                    $demande,
                    $match['score']
                );
            }
        }

        $this->addFlash('success', sprintf('Notifications envoyées à %d donneur(s)', count($topMatches)));
        return $this->redirectToRoute('admin_matching_demande', ['id' => $demandeId]);
    }
}
