<?php

namespace App\Controller\Admin;

use App\Repository\UrgenceRepository;
use App\Repository\ContactUrgenceRepository;
use App\Repository\LieuMedicalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/aide')]
class AideAdminController extends AbstractController
{

    #[Route('', name:'admin_aide')]
    public function index(
        UrgenceRepository $urgenceRepo,
        ContactUrgenceRepository $contactRepo,
        LieuMedicalRepository $lieuRepo
    ): Response
    {

        return $this->render('admin/aide/index.html.twig', [

            'totalUrgences' => $urgenceRepo->count([]),

            'totalContacts' => $contactRepo->count([]),

            'totalLieux' => $lieuRepo->count([]),

            'urgencesRecentes' => $urgenceRepo->findBy(
                [],
                ['dateUrgence'=>'DESC'],
                5
            )

        ]);

    }

}
