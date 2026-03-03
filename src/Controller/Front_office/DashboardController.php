<?php

namespace App\Controller\Front_office;

use App\Repository\RendezVousRepository;
use App\Repository\HopitalRepository;
use App\Repository\MealRepository;
use App\Repository\UserWellBeingDataRepository;
use App\Repository\CycleRepository;
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
        HopitalRepository $hopitalRepository,
        MealRepository $mealRepository,
        UserWellBeingDataRepository $wellBeingRepository,
        CycleRepository $cycleRepository
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

        // Well-Being Data
        $latestWellBeing = $wellBeingRepository->findOneBy(['user' => $user], ['createdAt' => 'DESC']);

        // Nutrition Data (Today)
        $today = new \DateTimeImmutable('today');
        $meals = $mealRepository->createQueryBuilder('m')
            ->where('m.user = :user')
            ->andWhere('m.createAt >= :today')
            ->setParameter('user', $user)
            ->setParameter('today', $today)
            ->getQuery()
            ->getResult();

        $nutrition = [
            'calories' => 0,
            'sugar' => 0,
            'protein' => 0,
            'count' => count($meals)
        ];
        foreach ($meals as $meal) {
            $nutrition['calories'] += $meal->getCalories() ?? 0;
            $nutrition['sugar'] += $meal->getSugar() ?? 0;
            $nutrition['protein'] += $meal->getProtein() ?? 0;
        }

        // Cycle Data
        $latestCycle = $cycleRepository->findOneBy(['user' => $user], ['dateDebutM' => 'DESC']);

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
            $stressStats = ['Low' => 0, 'Moderate' => 0, 'High' => 0];
            $scatterData = [];
        }

        return $this->render('dashboard/index.html.twig', [
            'user'                   => $user,
            'quickActions'           => $quickActions,
            'upcomingAppointments'   => $upcomingAppointments,
            'completedConsultations' => $completedConsultations,
            'availableHospitals'     => $availableHospitals,
            'stressStats'            => $stressStats,
            'scatterData'            => $scatterData,
            'latestWellBeing'        => $latestWellBeing,
            'nutrition'              => $nutrition,
            'latestCycle'            => $latestCycle,
        ]);
    }
}
