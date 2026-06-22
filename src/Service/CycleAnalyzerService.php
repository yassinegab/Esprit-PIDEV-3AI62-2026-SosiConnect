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
        $debut = $cycle->getDateDebutM();
        $fin = $cycle->getDateFinM();
        if (!$debut || !$fin) {
            return 0;
        }
        return $debut->diff($fin)->days + 1;
    }

    /**
     * Calcul des durées réelles des cycles
     * (date début N → date début N+1)
     *
     * @param Cycle[] $cycles
     * @return int[]
     */
    public function calculateCycleLengths(array $cycles): array
    {
        $lengths = [];

        for ($i = 0; $i < count($cycles) - 1; $i++) {
            $currentStart = $cycles[$i]->getDateDebutM();
            $nextStart = $cycles[$i + 1]->getDateDebutM();

            if ($currentStart && $nextStart) {
                $length = (int) $currentStart->diff($nextStart)->days;
                $lengths[] = $length;
            }
        }

        return $lengths;
    }

    /**
     * Moyenne des cycles réels
     *
     * @param Cycle[] $cycles
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
     *
     * @param Cycle[] $cycles
     * @return string[]
     */
    public function buildLabels(array $cycles): array
    {
        $labels = [];
        for ($i = 0; $i < count($cycles) - 1; $i++) {
            $debut = $cycles[$i]->getDateDebutM();
            if ($debut) {
                $labels[] = $debut->format('d M');
            }
        }
        return $labels;
    }

    /**
     * Prédiction prochain cycle
     *
     * @param Cycle[] $cycles
     */
    public function predictNextCycle(array $cycles): ?\DateTime
    {
        if (count($cycles) < 2) {
            return null;
        }

        $average = round($this->calculateAverage($cycles));
        $lastCycle = end($cycles);
        $lastStart = $lastCycle->getDateDebutM();
        if (!$lastStart) {
            return null;
        }

        $nextDate = clone $lastStart;
        $nextDate->modify("+$average days");

        return $nextDate;
    }
}