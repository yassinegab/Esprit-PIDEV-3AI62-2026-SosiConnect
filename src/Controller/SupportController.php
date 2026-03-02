<?php

namespace App\Controller;

use App\Repository\DonRepository;
use App\Repository\FAQRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupportController extends AbstractController
{
    #[Route('/don', name: 'don')]
    public function don(DonRepository $donRepository): Response
    {
        $stats = $donRepository->getStats();
        $recentDons = $donRepository->findRecent(5);

        return $this->render('front/don/index.html.twig', [
            'activeModule' => 'don',
            'stats' => $stats,
            'recentDons' => $recentDons,
        ]);
    }

    #[Route('/aide', name: 'aide')]
    public function aide(FAQRepository $faqRepository): Response
    {
        try {
            $popularFaqs = $faqRepository->getPopular(5);
            $categories = $faqRepository->getCategories();
        } catch (\Exception $e) {
            $popularFaqs = [];
            $categories = [];
        }

        return $this->render('front/aide/index.html.twig', [
            'activeModule' => 'aide',
            'popularFaqs' => $popularFaqs,
            'categories' => $categories,
        ]);
    }
}
