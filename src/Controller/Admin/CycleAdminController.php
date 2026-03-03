<?php

namespace App\Controller\Admin;

use App\Repository\CycleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/cycle')]
class CycleAdminController extends AbstractController
{
    #[Route('/', name: 'admin_cycle_index', methods: ['GET'])]
    public function index(CycleRepository $cycleRepository): Response
    {
        $cycles = $cycleRepository->findBy([], ['dateDebutM' => 'DESC']);

        // Stats
        $totalCycles = count($cycles);
        $users = [];
        $totalDuration = 0;

        foreach ($cycles as $cycle) {
            if ($cycle->getUser()) {
                $users[$cycle->getUser()->getId()] = true;
            }
            $diff = $cycle->getDateFinM()->diff($cycle->getDateDebutM())->days + 1;
            $totalDuration += $diff;
        }

        $activeUsers = count($users);
        $avgDuration = $totalCycles > 0 ? round($totalDuration / $totalCycles, 1) : 0;

        return $this->render('admin/cycle/index.html.twig', [
            'cycles' => $cycles,
            'stats' => [
                'total' => $totalCycles,
                'users' => $activeUsers,
                'avgDuration' => $avgDuration
            ]
        ]);
    }

    #[Route('/{id}/show', name: 'admin_cycle_show', methods: ['GET'])]
    public function show(CycleRepository $cycleRepository, int $id): Response
    {
        // Find specific cycle or user's cycles? The ID is ambiguous if it's cycle ID.
        // Let's assume we want to see user's history.
        // But the route suggests cycle detail.
        // Let's make it user history instead?
        // Actually, looking at the table, we might want to click on a user to see their history.
        // For now, let's keep it simple and just show the cycle details.

        // Wait, I can't easily change the ID meaning without context. 
        // Let's just improve the index first.
        return $this->redirectToRoute('admin_cycle_index');
    }
}
