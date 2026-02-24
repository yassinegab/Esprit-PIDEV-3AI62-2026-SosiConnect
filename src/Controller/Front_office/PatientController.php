<?php

namespace App\Controller\Front_office;

use App\Entity\DossierMedical;
use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/dashboard/patient')]
#[IsGranted('ROLE_PATIENT')]
class PatientController extends AbstractController
{
    // 🏠 Affichage du Dashboard Patient
    #[Route('', name: 'patient_dashboard')]
    public function index(DossierMedicalRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        
        // Cherche le dossier du patient
        $dossier = $repo->findOneBy(['user' => $user]);

        // Si le dossier n'existe pas, le créer automatiquement
        if (!$dossier) {
            $dossier = new DossierMedical();
            $dossier->setUser($user);
            $em->persist($dossier);
            $em->flush();
        }

        return $this->render('dashboard/patient.html.twig', [
            'user' => $user,
            'dossier' => $dossier
        ]);
    }

    // ✏️ Update du Dossier Médical
    #[Route('/update', name: 'patient_dossier_update', methods: ['POST'])]
    public function update(Request $request, DossierMedicalRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $dossier = $repo->findOneBy(['user' => $user]);

        if (!$dossier) {
            throw $this->createNotFoundException('Dossier médical introuvable');
        }

        // ✅ Mise à jour des champs depuis le formulaire
        $dossier->setAllergies($request->request->get('allergies'));
        $dossier->setTraitementsEnCours($request->request->get('traitements'));
        $dossier->setDiagnostics($request->request->get('diagnostics'));
        $dossier->setDerniereMiseAJour(new \DateTime());

        $em->flush();

        $this->addFlash('success', 'Dossier médical mis à jour avec succès');

        return $this->redirectToRoute('patient_dashboard');
    }

    // 🗑️ Supprimer le dossier du patient (optionnel)
    #[Route('/delete', name: 'patient_dossier_delete', methods: ['POST'])]
    public function delete(Request $request, DossierMedicalRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $dossier = $repo->findOneBy(['user' => $user]);

        if ($dossier) {
            $em->remove($dossier);
            $em->flush();
            $this->addFlash('success', 'Dossier médical supprimé avec succès');
        } else {
            $this->addFlash('warning', 'Aucun dossier à supprimer');
        }

        return $this->redirectToRoute('patient_dashboard');
    }
}