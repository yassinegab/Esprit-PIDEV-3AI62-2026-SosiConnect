<?php

namespace App\Controller;

use App\Entity\Cycle;
use App\Repository\CycleRepository;
use App\Service\CycleCalculatorService;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CycleExportController extends AbstractController
{
    #[Route('/cycle/export/pdf', name: 'cycle_export_pdf')]
    public function exportPdf(CycleRepository $cycleRepository, CycleCalculatorService $calculator): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cycles = $cycleRepository->findBy(['user' => $user], ['dateDebutM' => 'DESC']);

        $stats = [
            'total' => count($cycles),
            'avg_cycle' => $calculator->calculateAverageCycleLength($cycles),
            'avg_period' => $calculator->calculateAverageMenstruationLength($cycles),
            'regularity' => $calculator->calculateRegularityRate($cycles),
            'shortest' => $calculator->calculateShortestCycle($cycles),
            'longest' => $calculator->calculateLongestCycle($cycles)
        ];

        // Configure Dompdf
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('cycle/report_pdf.html.twig', [
            'user' => $user,
            'cycles' => $cycles,
            'stats' => $stats
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $output = $dompdf->output();
        $filename = 'Rapport_Cycle_' . $user->getPrenom() . '_' . date('Y-m-d') . '.pdf';

        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"'
        ]);
    }
}
