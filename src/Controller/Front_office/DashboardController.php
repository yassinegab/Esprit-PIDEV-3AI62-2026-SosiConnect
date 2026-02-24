<?php

namespace App\Controller\Front_office;

use App\Repository\RendezVousRepository;
use App\Repository\HopitalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\StressPrediction;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'frontoffice_dashboard')]
    public function index(
        EntityManagerInterface $em,
        RendezVousRepository $rendezVousRepository,
        HopitalRepository $hopitalRepository
    ): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // ── Statistiques médicales ──────────────────────────────
        $upcomingAppointments = $rendezVousRepository->count([
            'patient' => $user,
            'statut'  => 'En attente'
        ]);

        $completedConsultations = $rendezVousRepository->count([
            'patient' => $user,
            'statut'  => 'Terminé'
        ]);

        $availableHospitals = $hopitalRepository->count([
            'serviceUrgenceDispo' => true
        ]);

        // ── Actions rapides ─────────────────────────────────────
        $quickActions = [
            ['emoji' => '💊', 'label' => 'Médicaments'],
            ['emoji' => '🧘', 'label' => 'Méditation'],
            ['emoji' => '🏃', 'label' => 'Exercice'],
            ['emoji' => '🥗', 'label' => 'Nutrition'],
        ];

        // ── Stress Stats dynamiques (depuis StressPrediction) ───
        $stressStats = ['Low' => 0, 'Moderate' => 0, 'High' => 0];
        $scatterData = [];

        try {
            $allPredictions = $em->getRepository(StressPrediction::class)
                ->findBy([], ['createdAt' => 'ASC']);

            foreach ($allPredictions as $p) {
                $label = $p->getPredictedStressType();
                if (isset($stressStats[$label])) {
                    $stressStats[$label]++;
                }

                $wellBeing = $p->getUserWellBeingData();
                $userName  = ($wellBeing && $wellBeing->getUser())
                    ? $wellBeing->getUser()->getNom()
                    : 'Anon';

                $scatterData[] = [
                    'x'        => $p->getCreatedAt()->format('Y-m-d H:i'),
                    'y'        => $p->getConfidenceScore(),
                    'user'     => $userName,
                    'category' => $label,
                ];
            }
        } catch (\Exception $e) {
            // Si l'entité StressPrediction n'existe pas encore → graphiques vides
            $stressStats = ['Low' => 0, 'Moderate' => 0, 'High' => 0];
            $scatterData = [];
        }

        return $this->render('dashboard/index.html.twig', [
            'user'                   => $user,          // objet User réel (prenom, nom, etc.)
            'quickActions'           => $quickActions,
            'upcomingAppointments'   => $upcomingAppointments,
            'completedConsultations' => $completedConsultations,
            'availableHospitals'     => $availableHospitals,
            'stressStats'            => $stressStats,   // ✅ dynamique
            'scatterData'            => $scatterData,   // ✅ dynamique
        ]);
    }
}