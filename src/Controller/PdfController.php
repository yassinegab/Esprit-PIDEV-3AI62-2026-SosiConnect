<?php
namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cycle;
use Doctrine\Persistence\ManagerRegistry;

class PdfController extends AbstractController
{
    #[Route('/cycle/export-pdf', name: 'export_cycle_pdf')]
    public function exportCyclePdf(ManagerRegistry $doctrine): Response
    {
        // Récupérer tous les cycles
        $cycles = $doctrine->getRepository(Cycle::class)->findAll();

        // Tri par date de début
        usort($cycles, function($a, $b) {
            return $a->getDateDebutM() <=> $b->getDateDebutM();
        });

        // Déterminer la période du rapport
        $start_date = !empty($cycles) ? $cycles[0]->getDateDebutM()->format('d/m/Y') : '';
        $end_date = !empty($cycles) ? end($cycles)->getDateFinM()->format('d/m/Y') : '';

        // Générer le HTML pour le PDF
        $html = $this->renderView('pdf/rapport_cycle.html.twig', [
            'user' => ['name' => 'Tous les cycles'],
            'cycles' => $cycles,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

        // Configurer Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="rapport_cycles.pdf"',
            ]
        );
    }
}