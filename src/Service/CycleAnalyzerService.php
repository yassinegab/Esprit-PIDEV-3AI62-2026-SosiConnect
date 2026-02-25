<?php

namespace App\Service;

use App\Entity\Cycle;

class CycleAnalyzerService
{
    /**
     * Durée des règles (3-8 jours normal)
     */
    public function calculateMenstruationLength(Cycle $cycle): int
    {
        return $cycle->getDateDebutM()
            ->diff($cycle->getDateFinM())
            ->days + 1;
    }

    /**
     * Calcul des durées réelles des cycles
     * (date début N → date début N+1)
     */
    public function calculateCycleLengths(array $cycles): array
    {
        $lengths = [];

        for ($i = 0; $i < count($cycles) - 1; $i++) {
            $currentStart = $cycles[$i]->getDateDebutM();
            $nextStart = $cycles[$i + 1]->getDateDebutM();

            $length = $currentStart->diff($nextStart)->days;
            $lengths[] = $length;
        }

        return $lengths;
    }

    /**
     * Moyenne des cycles réels
     */
    public function calculateAverage(array $cycles): float
    {
        $lengths = $this->calculateCycleLengths($cycles);

        if (count($lengths) === 0) {
            return 0;
        }

        return array_sum($lengths) / count($lengths);
    }

    /**
     * Génère les labels pour les cycles (format "d M")
     */
    public function buildLabels(array $cycles): array
    {
        $labels = [];
        for ($i = 0; $i < count($cycles) - 1; $i++) {
            $labels[] = $cycles[$i]->getDateDebutM()->format('d M');
        }
        return $labels;
    }

    /**
     * Prédiction prochain cycle
     */
    public function predictNextCycle(array $cycles): ?\DateTime
    {
        if (count($cycles) < 2) {
            return null;
        }

        $average = round($this->calculateAverage($cycles));
        $lastCycle = end($cycles);

        $nextDate = clone $lastCycle->getDateDebutM();
        $nextDate->modify("+$average days");

        return $nextDate;
    }
}