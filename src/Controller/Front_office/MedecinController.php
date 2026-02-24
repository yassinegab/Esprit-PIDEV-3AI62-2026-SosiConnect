<?php

namespace App\Controller\Front_office;

use App\Form\MedecinProfileType;
use App\Repository\DossierMedicalRepository;
use App\Repository\RendezVousRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/medecin')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinController extends AbstractController
{
    /**
     * Dashboard principal du médecin
     */
    #[Route('/dashboard', name: 'medecin_dashboard')]
    public function dashboard(
        DossierMedicalRepository $dossierRepository,
        RendezVousRepository $rdvRepository,
        UserRepository $userRepository
    ): Response {
        $user = $this->getUser();
        
        // Statistiques
        $totalDossiers = $dossierRepository->count([]);
        $totalPatients = $userRepository->countPatients();  // ← suppose que cette méthode existe dans UserRepository
        
        // Rendez-vous du médecin aujourd'hui
        $today = new \DateTime('today');
        $rdvAujourdhui = $rdvRepository->createQueryBuilder('r')
            ->where('r.medecin = :medecin')
            ->andWhere('DATE(r.dateRendezVous) = :today')
            ->setParameter('medecin', $user)
            ->setParameter('today', $today->format('Y-m-d'))
            ->getQuery()
            ->getResult();
        
        $nbRdvAujourdhui = count($rdvAujourdhui);
        
        // Derniers dossiers modifiés
        $derniersDossiers = $dossierRepository->createQueryBuilder('d')
            ->orderBy('d.derniereMiseAJour', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return $this->render('Front_office/medecin/index.html.twig', [
            'user'              => $user,
            'totalDossiers'     => $totalDossiers,
            'totalPatients'     => $totalPatients,
            'nbRdvAujourdhui'   => $nbRdvAujourdhui,
            'derniersDossiers'  => $derniersDossiers,
        ]);
    }
   
    /**
     * Profil du médecin
     */
    #[Route('/profile', name: 'medecin_profile')]
    public function profile(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        
        $form = $this->createForm(MedecinProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Profil mis à jour avec succès !');
            return $this->redirectToRoute('medecin_profile');
        }

        return $this->render('Front_office/medecin/profile.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Liste de tous les dossiers médicaux
     */
    #[Route('/dossiers', name: 'medecin_dossiers_liste')]
    public function listeDossiers(DossierMedicalRepository $dossierRepository): Response
    {
        $dossiers = $dossierRepository->findAllWithUsers();  // ← méthode custom supposée exister
        
        return $this->render('Front_office/medecin/dossiers_liste.html.twig', [
            'user'     => $this->getUser(),
            'dossiers' => $dossiers,
        ]);
    }
    
    /**
     * Consulter un dossier médical spécifique
     */
    #[Route('/dossiers/{id}', name: 'medecin_dossier_detail', requirements: ['id' => '\d+'])]
    public function consulterDossier(int $id, DossierMedicalRepository $dossierRepository): Response
    {
        $dossier = $dossierRepository->find($id);
        
        if (!$dossier) {
            $this->addFlash('error', 'Dossier médical introuvable.');
            return $this->redirectToRoute('medecin_dossiers_liste');
        }
        
        return $this->render('Front_office/medecin/dossier_detail.html.twig', [
            'user'   => $this->getUser(),
            'dossier' => $dossier,
        ]);
    }
}