<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index(UserRepository $userRepository): Response
    {
        // On cherche 'Femme' ou 'female' pour être sûr de capter tout le monde
        $utilisatrices = $userRepository->findBy(['sexe' => 'Femme']);
        if (empty($utilisatrices)) {
            $utilisatrices = $userRepository->findBy(['sexe' => 'female']);
        }

        $totalUsers = $userRepository->count([]);
        $totalFemmes = count($utilisatrices);

        $femmesAvecCycle = $totalFemmes; // Simplification pour l'instant

        $pourcentageSuivi = $totalFemmes > 0 ? 100 : 0;

        // Définition des actions rapides pour le dashboard
        $quickActions = [
            [
                'label' => 'Ajouter un utilisateur',
                'url' => $this->generateUrl('app_register'), // Ou une route admin dédiée
                'icon' => 'fas fa-user-plus',
                'color' => 'bg-blue-500 text-white',
                'emoji' => '👤'
            ],
            [
                'label' => 'Gérer les rendez-vous',
                'url' => $this->generateUrl('admin_rendez_vous_index'),
                'icon' => 'fas fa-calendar-check',
                'color' => 'bg-green-500 text-white',
                'emoji' => '📅'
            ],
            [
                'label' => 'Gestion Cycles',
                'url' => $this->generateUrl('admin_cycle_index'),
                'icon' => 'fas fa-venus',
                'color' => 'bg-pink-500 text-white',
                'emoji' => '🌸'
            ],
            [
                'label' => 'Voir les statistiques',
                'url' => $this->generateUrl('admin_stats_index'),
                'icon' => 'fas fa-chart-line',
                'color' => 'bg-purple-500 text-white',
                'emoji' => '📊'
            ]
        ];

        return $this->render('admin/dashboard/index.html.twig', [
            'utilisatrices' => $utilisatrices,
            'totalUsers' => $totalUsers,
            'totalFemmes' => $totalFemmes,
            'femmesAvecCycle' => $femmesAvecCycle,
            'pourcentageSuivi' => $pourcentageSuivi,
            'quickActions' => $quickActions,
        ]);
    }
}
