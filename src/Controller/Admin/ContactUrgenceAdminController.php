<?php

namespace App\Controller\Admin;

use App\Entity\ContactUrgence;
use App\Repository\ContactUrgenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/aide/contacts')]
class ContactUrgenceAdminController extends AbstractController
{

    /*
    |--------------------------------------------------------------------------
    | LISTE DES CONTACTS
    |--------------------------------------------------------------------------
    */
    #[Route('', name: 'admin_contacts')]
    public function index(ContactUrgenceRepository $repo): Response
    {
        $contacts = $repo->findBy(
            [],
            ['id' => 'DESC']
        );

        return $this->render('admin/aide/contacts.html.twig', [
            'contacts' => $contacts
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | SUPPRIMER CONTACT
    |--------------------------------------------------------------------------
    */
    #[Route('/delete/{id}', name: 'admin_contact_delete', methods:['POST'])]
    public function delete(
        ContactUrgence $contact,
        EntityManagerInterface $em
    ): Response
    {
        try {

            $em->remove($contact);
            $em->flush();

            $this->addFlash(
                'success',
                'Contact supprimé avec succès'
            );

        } catch (\Exception $e) {

            $this->addFlash(
                'error',
                'Erreur lors de la suppression'
            );

        }

        return $this->redirectToRoute('admin_contacts');
    }


}
