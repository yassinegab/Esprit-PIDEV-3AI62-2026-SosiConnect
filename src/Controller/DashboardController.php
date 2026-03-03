<?php

namespace App\Controller;

use App\Repository\HopitalRepository;
use App\Repository\RendezVousRepository;
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
    #[Route('/', name: 'app_dashboard')]
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

        // Medical Services Statistics
        $upcomingAppointments = $rendezVousRepository->count([
            'patient' => $user,
            'statut' => 'En attente'
        ]);
        
        $completedConsultations = $rendezVousRepository->count([
            'patient' => $user,
            'statut' => 'Terminé'
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

        // Actions rapides
        $quickActions = [
            ['emoji' => '💊', 'label' => 'Médicaments'],
            ['emoji' => '🧘', 'label' => 'Méditation'],
            ['emoji' => '🏃', 'label' => 'Exercice'],
            ['emoji' => '🥗', 'label' => 'Nutrition'],
        ];

        // Stress Statistics (Admin/Global)
        $allPredictions = $em->getRepository(StressPrediction::class)->findBy([], ['createdAt' => 'ASC']);
        
        $stats = [
            'Low' => 0,
            'Moderate' => 0,
            'High' => 0
        ];
        
        $scatterData = [];
        foreach ($allPredictions as $p) {
            $label = $p->getPredictedStressType();
            if (isset($stats[$label])) {
                $stats[$label]++;
            }
            
            $scatterData[] = [
                'x' => $p->getCreatedAt()->format('Y-m-d H:i'),
                'y' => $p->getConfidenceScore(),
                'user' => $p->getUserWellBeingData()->getUser() ? $p->getUserWellBeingData()->getUser()->getNom() : 'Anon',
                'category' => $label
            ];
        }

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'quickActions' => $quickActions,
            'stressStats' => $stats,
            'scatterData' => $scatterData,
            'upcomingAppointments' => $upcomingAppointments,
            'completedConsultations' => $completedConsultations,
            'availableHospitals' => $availableHospitals,
            'latestWellBeing' => $latestWellBeing,
            'nutrition' => $nutrition,
            'latestCycle' => $latestCycle,
        ]);
    }
}
