<?php

namespace App\Controller\Admin;

use App\Entity\Urgence;
use App\Repository\UrgenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/aide/urgences')]
class UrgenceAdminController extends AbstractController
{

    /**
     * LISTE + TRI
     */
    #[Route('', name: 'admin_urgences')]
    public function index(
        UrgenceRepository $repo,
        Request $request
    ): Response
    {

        $sort = $request->query->get('sort', 'date');

        if ($sort === 'statut')
        {
            $urgences = $repo->findBy([], [
                'statut' => 'ASC',
                'dateUrgence' => 'DESC'
            ]);
        }
        else
        {
            $urgences = $repo->findBy([], [
                'dateUrgence' => 'DESC'
            ]);
        }

        return $this->render('admin/aide/urgences.html.twig', [
            'urgences' => $urgences,
            'sort' => $sort
        ]);

    }


    /**
     * SUPPRIMER
     */
    #[Route('/delete/{id}', name: 'admin_urgence_delete')]
    public function delete(
        Urgence $urgence,
        EntityManagerInterface $em
    ): Response
    {

        $em->remove($urgence);
        $em->flush();

        $this->addFlash('success', 'Urgence supprimée');

        return $this->redirectToRoute('admin_urgences');

    }


    /**
     * CHANGER STATUT
     */
    #[Route('/toggle/{id}', name: 'admin_urgence_toggle')]
    public function toggle(
        Urgence $urgence,
        EntityManagerInterface $em
    ): Response
    {

        if ($urgence->getStatut() === 'EN_ATTENTE')
        {
            $urgence->setStatut('TRAITEE');
        }
        else
        {
            $urgence->setStatut('EN_ATTENTE');
        }

        $em->flush();

        $this->addFlash('success', 'Statut modifié');

        return $this->redirectToRoute('admin_urgences');

    }

}
