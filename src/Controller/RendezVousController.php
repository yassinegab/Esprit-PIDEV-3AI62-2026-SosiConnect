<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Entity\User;
use App\Form\RendezVousType;
use App\Repository\RendezVousRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/rendez-vous')]  // <-- Utilisez les attributs PHP 8
class RendezVousController extends AbstractController
{
#[Route('/rendez-vous', name: 'frontoffice_rendez_vous')]           
public function index(RendezVousRepository $rendezVousRepository): Response
{
    // Récupérer l'utilisateur connecté
        /** @var \App\Entity\User|null $user */
    $user = $this->getUser();
    
    // Vérifier que c'est bien un patient
    if (!$user || !in_array('ROLE_PATIENT', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès réservé aux patients');
    }
    
    // Récupérer seulement les rendez-vous de ce patient
    $rendezVousList = $rendezVousRepository->findBy(['patient' => $user]);
    
    // DEBUG
    dump("Utilisateur connecté: " . $user->getEmail());
    dump("ID utilisateur: " . $user->getId());
    dump("Nombre de RDV: " . count($rendezVousList));
    
    foreach ($rendezVousList as $rdv) {
        dump("RDV ID: " . $rdv->getId());
    }
    
    return $this->render('rendez_vous/index.html.twig', [
        'rendez_vous' => $rendezVousList,
    ]);
}
#[Route('/rendez-vous/new', name: 'frontoffice_rendez_vous_new')]  
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer le patient connecté
        /** @var \App\Entity\User|null $user */
    $user = $this->getUser();
    
    if (!$user || !in_array('ROLE_PATIENT', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès réservé aux patients');
    }
    
    $rendezVous = new RendezVous();
    
    // Assigner le patient connecté
    $rendezVous->setPatient($user);
    
    $form = $this->createForm(RendezVousType::class, $rendezVous);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Vérifier que le patient est toujours assigné
        if (!$rendezVous->getPatient()) {
            $rendezVous->setPatient($user);
        }
        
        $entityManager->persist($rendezVous);
        $entityManager->flush();

        $this->addFlash('success', 'Rendez-vous créé avec succès !');

        return $this->redirectToRoute('app_rendez_vous', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('rendez_vous/new.html.twig', [
        'rendez_vous' => $rendezVous,
        'form' => $form,
    ]);
}

#[Route('/{id}', name: 'app_rendez_vous_show', methods: ['GET'])]
    public function show(int $id, RendezVousRepository $rendezVousRepository): Response
{
    // Vérifier l'utilisateur connecté
        /** @var \App\Entity\User|null $user */
    $user = $this->getUser();
    
    if (!$user || !in_array('ROLE_PATIENT', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès réservé aux patients');
    }
    
    // Vérifier que l'ID est valide
    if ($id <= 0) {
        throw $this->createNotFoundException('ID invalide');
    }
    
    $rendezVous = $rendezVousRepository->find($id);
    
    // Vérifier que le rendez-vous existe ET appartient au patient connecté
    if (!$rendezVous) {
        throw $this->createNotFoundException('Rendez-vous non trouvé');
    }
    
    // Vérifier que le patient connecté est bien celui du rendez-vous
    $patient = $rendezVous->getPatient();
    if (!$patient || $patient->getId() !== $user->getId()) {
        throw $this->createAccessDeniedException('Ce rendez-vous ne vous appartient pas');
    }
    
    return $this->render('rendez_vous/show.html.twig', [
        'rendez_vous' => $rendezVous,
    ]);
}
#[Route('/{id}/modifier', name: 'app_rendez_vous_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
    
    if (!$user || !in_array('ROLE_PATIENT', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès réservé aux patients');
    }
    
    if ($id <= 0) {
        throw $this->createNotFoundException('ID invalide');
    }
    
    $rendezVous = $entityManager->getRepository(RendezVous::class)->find($id);
    
    if (!$rendezVous) {
        throw $this->createNotFoundException('Rendez-vous non trouvé');
    }
    
    // Vérifier l'appartenance
    $patient = $rendezVous->getPatient();
    if (!$patient || $patient->getId() !== $user->getId()) {
        throw $this->createAccessDeniedException('Ce rendez-vous ne vous appartient pas');
    }
    
    $form = $this->createForm(RendezVousType::class, $rendezVous);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        $this->addFlash('success', 'Rendez-vous modifié avec succès !');

        return $this->redirectToRoute('app_rendez_vous', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('rendez_vous/edit.html.twig', [
        'rendez_vous' => $rendezVous,
        'form' => $form,
    ]);
}

  #[Route('/{id}/supprimer', name: 'app_rendez_vous_delete', methods: ['POST'])]
public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
{
    $rendezVous = $entityManager->getRepository(RendezVous::class)->find($id);
    
    if (!$rendezVous) {
        throw $this->createNotFoundException('Rendez-vous non trouvé avec l\'ID: '.$id);
    }
    
    if ($this->isCsrfTokenValid('delete'.$rendezVous->getId(), (string)$request->request->get('_token', ''))) {
        $entityManager->remove($rendezVous);
        $entityManager->flush();

        $this->addFlash('success', 'Rendez-vous supprimé avec succès !');
    }

    return $this->redirectToRoute('app_rendez_vous', [], Response::HTTP_SEE_OTHER);
}
}