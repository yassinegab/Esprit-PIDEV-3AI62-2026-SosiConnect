<?php

namespace App\Controller;

use App\Entity\Cycle;
use App\Form\CycleType;
use App\Repository\CycleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\SecurityBundle\Security;

use App\Service\CycleCalculatorService;

final class CycleController extends AbstractController
{
    #[Route('/cycle', name: 'cycle_index')]
    public function index(EntityManagerInterface $em, Security $security, CycleCalculatorService $calculator): Response
    {
        /** @var \App\Entity\User|null $user */
        $user = $security->getUser();
        if (!$user || !in_array($user->getSexe(), ['Femme', 'female'])) {
            $this->addFlash('error', 'Accès réservé aux femmes.');
            return $this->redirectToRoute('user_wellbeing_index');
        }

        $cycles = $em->getRepository(Cycle::class)->findBy(['user' => $user], ['dateDebutM' => 'ASC']);

        $data = $calculator->generateCalendarEvents($cycles);
        $events = $data['events'] ?? [];
        $stats = $data['stats'] ?? null;

        if ($stats) {
            $nextPeriodDate = (isset($stats['next_period']) && $stats['next_period'] !== 'N/A') ? new \DateTime($stats['next_period']) : null;
            $ovulationDate = (isset($stats['ovulation']) && $stats['ovulation'] !== 'N/A') ? new \DateTime($stats['ovulation']) : null;
            
            $stats['google_period_url'] = $nextPeriodDate ? $calculator->generateGoogleCalendarUrl('🔴 Prochaines Règles (SOSI)', $nextPeriodDate, (clone $nextPeriodDate)->modify('+5 days')) : '#';
            $stats['google_ovulation_url'] = $ovulationDate ? $calculator->generateGoogleCalendarUrl('💜 Ovulation (SOSI)', $ovulationDate, (clone $ovulationDate)->modify('+1 day')) : '#';
        }

        return $this->render('cycle/calendar.html.twig', [
            'calendarEvents' => json_encode($events),
            'stats' => $stats
        ]);
    }

    #[Route('/cycle/new', name: 'cycle_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $cycle = new Cycle();
        $form = $this->createForm(CycleType::class, $cycle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var \App\Entity\User|null $user */
            $user = $this->getUser();
            $cycle->setUser($user);
            $em->persist($cycle);
            $em->flush();

            $this->addFlash('success', 'Cycle ajouté avec succès.');

            return $this->redirectToRoute('cycle_index');
        }

        return $this->render('cycle/form.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/cycle/{id}/edit', name: 'cycle_edit')]
    public function edit(Cycle $cycle, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CycleType::class, $cycle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Cycle mis à jour.');

            return $this->redirectToRoute('cycle_index');
        }

        return $this->render('cycle/form.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/cycle/{id}/delete', name: 'cycle_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Cycle $cycle, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('delete-cycle' . $cycle->getIdCycle(), (string)$request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Token invalide.');
            }

            $em->remove($cycle);
            $em->flush();

            $this->addFlash('success', 'Cycle supprimé.');

            return $this->redirectToRoute('cycle_index');
        }

        return $this->render('cycle/delete.html.twig', [
            'cycle' => $cycle,
        ]);
    }

    #[Route('/cycle/search', name: 'cycle_search')]
    public function searchByYear(Request $request, CycleRepository $cycleRepository): Response
    {
        $year = $request->query->get('year');

        if (!$year) {
            return $this->json(['error' => 'Year parameter missing'], 400);
        }

        $cycles = $cycleRepository->createQueryBuilder('c')
            ->where('YEAR(c.dateDebut) = :year')
            ->setParameter('year', $year)
            ->orderBy('c.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($cycles as $cycle) {
            $dateDebut = $cycle->getDateDebutM();
            $dateFin = $cycle->getDateFinM();
            $data[] = [
                'id' => $cycle->getIdCycle(),
                'dateDebut' => $dateDebut ? $dateDebut->format('Y-m-d') : null,
                'dateFin' => $dateFin ? $dateFin->format('Y-m-d') : null,
                'duration' => ($dateDebut && $dateFin) ? $dateDebut->diff($dateFin)->days : 0
            ];
        }

        return $this->json($data);
    }

    #[Route('/cycle/history', name: 'calendar_cycles_history')]
    public function history(CycleRepository $cycleRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $cycles = $cycleRepository->findBy(['user' => $user], ['dateDebutM' => 'ASC']);

        return $this->render('cycle/history.html.twig', [
            'cycles' => $cycles,
        ]);
    }

    #[Route('/cycle/stats', name: 'cycle_stats')]
    public function stats(CycleRepository $cycleRepository, CycleCalculatorService $calculator): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $cycles = $cycleRepository->findBy(['user' => $user], ['dateDebutM' => 'ASC']);

        $stats = [
            'total' => count($cycles),
            'avg_cycle' => $calculator->calculateAverageCycleLength($cycles),
            'avg_period' => $calculator->calculateAverageMenstruationLength($cycles),
            'regularity' => $calculator->calculateRegularityRate($cycles),
            'shortest' => $calculator->calculateShortestCycle($cycles),
            'longest' => $calculator->calculateLongestCycle($cycles)
        ];

        $labels = [];
        $data = [];
        foreach ($cycles as $cycle) {
            $dateDebut = $cycle->getDateDebutM();
            $dateFin = $cycle->getDateFinM();
            if ($dateDebut && $dateFin) {
                $labels[] = $dateDebut->format('d M Y');
                $data[] = $dateDebut->diff($dateFin)->days + 1;
            }
        }

        return $this->render('cycle/stats.html.twig', [
            'stats' => $stats,
            'chartLabels' => json_encode($labels),
            'chartData' => json_encode($data)
        ]);
    }
}
