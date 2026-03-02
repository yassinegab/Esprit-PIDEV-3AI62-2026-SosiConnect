<?php

namespace App\Controller\Admin;

use App\Repository\CycleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/cycle')]
class CycleAdminController extends AbstractController
{
    #[Route('/', name: 'admin_cycle_index', methods: ['GET'])]
    public function index(CycleRepository $cycleRepository): Response
    {
        return $this->render('admin/cycle/index.html.twig', [
            'cycles' => $cycleRepository->findAll(),
        ]);
    }
}
