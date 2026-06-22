<?php

namespace App\Controller;

use App\Entity\Hopital;
use App\Repository\HopitalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/old_hopitaux')]
class HopitalController extends AbstractController
{
#[Route('/hopitaux', name: 'old_frontoffice_hopitaux')]   
    public function index(HopitalRepository $hopitalRepository): Response
    {
        return $this->render('hopital/index.html.twig', [
            'hopitaux' => $hopitalRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'old_app_hopital_show', methods: ['GET'])]
    public function show(Hopital $hopital): Response
    {
        return $this->render('hopital/show.html.twig', [
            'hopital' => $hopital,
        ]);
    }
}