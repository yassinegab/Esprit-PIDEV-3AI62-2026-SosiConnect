<?php

namespace App\Controller\Front_office\Login;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté → redirection selon rôle
        if ($this->getUser()) {
            return $this->redirectBasedOnRole();
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('Front_office/security/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Cette méthode peut rester vide : elle est interceptée par le firewall
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Redirection selon le rôle de l'utilisateur (fallback quand déjà connecté)
     */
    private function redirectBasedOnRole(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles, true)) {
            return $this->redirectToRoute('admin_dashboard');
        }

        if (in_array('ROLE_MEDECIN', $roles, true)) {
            // Changé de medecin_dossier_consulter à medecin_dashboard (plus logique)
            return $this->redirectToRoute('medecin_dashboard');
        }

        // Patient ou rôle par défaut
        return $this->redirectToRoute('frontoffice_dashboard');
    }
}