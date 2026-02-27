<?php

namespace App\Controller;

use App\Repository\CycleRepository;
use App\Service\CycleAnalyzerService;
use App\Service\CyclePredictionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CycleAnalysisController extends AbstractController
{
    #[Route('/cycle/analyse', name: 'cycle_analyse')]
    public function analyse(
        CycleRepository $cycleRepository,
        CycleAnalyzerService $analyzerService,
        CyclePredictionService $predictionService
    ): Response {
        $cycles = $cycleRepository->findBy([], ['dateDebutM' => 'ASC']);

        $lengths = $analyzerService->calculateCycleLengths($cycles);
        $labels = $analyzerService->buildLabels($cycles);
        $average = (int) round($analyzerService->calculateAverage($cycles));
        $prediction = $analyzerService->predictNextCycle($cycles);

        $aiAnalysis = null;
        $irregularFromAi = [];
        $advice = 'Données insuffisantes pour analyse.';

        if (count($lengths) >= 2) {
            try {
                $aiResult = $predictionService->analyzeCycles($lengths, $labels);
                $aiAnalysis = $aiResult;
                $advice = $aiResult['conseil'] ?: ($aiResult['resume'] ?? $advice);

                foreach ($aiResult['cycles_irreguliers'] ?? [] as $irr) {
                    $idx = (int) ($irr['index'] ?? 0);
                    if ($idx >= count($lengths)) {
                        $idx = max(0, count($lengths) - 1);
                    }
                    if (isset($cycles[$idx], $cycles[$idx + 1])) {
                        $cycle = $cycles[$idx];
                        $nextCycle = $cycles[$idx + 1];
                        $cycleEnd = (clone $nextCycle->getDateDebutM())->modify('-1 day');
                        $irregularFromAi[] = [
                            'cycle' => $cycle,
                            'cycleEnd' => $cycleEnd,
                            'length' => $irr['duree'] ?? $lengths[$idx] ?? 0,
                            'raison' => $irr['raison'] ?? '',
                        ];
                    }
                }
            } catch (\Throwable $e) {
                $advice = 'L\'analyse IA est temporairement indisponible.';
            }
        }

        return $this->render('cycle/AnalyseCycles.html.twig', [
            'irregular' => $irregularFromAi,
            'average' => $average,
            'prediction' => $prediction,
            'lengths' => $lengths,
            'labels' => $labels,
            'advice' => $advice,
            'aiAnalysis' => $aiAnalysis
        ]);
    }
}
