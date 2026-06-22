<?php

namespace App\Controller\Front;

use App\Entity\ContactUrgence;
use App\Form\ContactUrgenceType;
use App\Repository\ContactUrgenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/aide/contact')]
class ContactUrgenceController extends AbstractController
{
    #[Route('/', name: 'contact_urgence_index')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        ContactUrgenceRepository $repo
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $contact = new ContactUrgence();

        $form = $this->createForm(ContactUrgenceType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setUser($user);
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('contact_urgence_index');
        }

        $contacts = $repo->findBy(['user' => $user]);

        return $this->render('front/contact_urgence/index.html.twig', [
            'form' => $form->createView(),
            'contacts' => $contacts,
        ]);
    }

    #[Route('/delete/{id}', name: 'contact_urgence_delete')]
    public function delete(
        ContactUrgence $contact,
        EntityManagerInterface $em
    ): Response {
        if ($contact->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer ce contact.');
        }

        $em->remove($contact);
        $em->flush();

        return $this->redirectToRoute('contact_urgence_index');
    }

    #[Route('/edit/{id}', name: 'contact_urgence_edit')]
    public function edit(
        Request $request,
        ContactUrgence $contact,
        EntityManagerInterface $em
    ): Response {
        if ($contact->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier ce contact.');
        }

        $form = $this->createForm(ContactUrgenceType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('contact_urgence_index');
        }

        return $this->render('front/contact_urgence/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
