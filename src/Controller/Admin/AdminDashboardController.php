<?php

namespace App\Controller\Admin;

use App\Repository\UserRepository;
use App\Repository\RendezVousRepository;
use App\Repository\HopitalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    /**
     * Redirect /admin to /admin/dashboard
     */
    #[Route('', name: 'admin_index')]
    public function adminIndex(): RedirectResponse
    {
        return $this->redirectToRoute('admin_dashboard');
    }

    #[Route('/dashboard', name: 'admin_dashboard')]
    public function index(
        UserRepository $userRepository,
        RendezVousRepository $rendezVousRepository,
        HopitalRepository $hopitalRepository
    ): Response
    {
        // Statistiques simples
        $totalUsers = 0;
        $totalAppointments = 0;
        $totalHospitals = 0;

        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        // Données admin
        $admin = [
            'prenom' => $user ? $user->getPrenom() : 'Admin',
            'nom' => $user ? $user->getNom() : '',
        ];

        // Actions rapides admin
        $quickActions = [
            ['emoji' => '👥', 'label' => 'Utilisateurs'],
            ['emoji' => '📅', 'label' => 'Rendez-vous'],
            ['emoji' => '🏥', 'label' => 'Hôpitaux'],
            ['emoji' => '📊', 'label' => 'Statistiques'],
        ];

        return $this->render('admin/dashboard/index.html.twig', [
            'admin' => $admin,
            'quickActions' => $quickActions,
            'totalUsers' => $totalUsers,
            'totalAppointments' => $totalAppointments,
            'totalHospitals' => $totalHospitals,
        ]);
    }
}
