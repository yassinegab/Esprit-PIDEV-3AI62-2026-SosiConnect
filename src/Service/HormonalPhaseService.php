<?php
// src/Service/HormonalPhaseService.php
namespace App\Service;

use App\Entity\Cycle;

class HormonalPhaseService
{
    private $analyzer;

    public function __construct(\App\Service\CycleAnalyzerService $analyzer)
    {
        $this->analyzer = $analyzer;
    }

    /**
     * Génère les événements de phases hormonales pour un cycle
     */
    public function generateCyclePhases(Cycle $cycle): array
    {
        $events = [];
        $startDate = $cycle->getDateDebutM();

        // Récupère la durée de menstruation
        $periodLength = $this->analyzer->calculateMenstruationLength($cycle);

        // Détermine la durée du cycle
        // Ici on utilise la moyenne du cycle si disponible, sinon 28 jours par défaut
        $cycleLength = 28;
        $cycles = [$cycle]; // si tu veux passer tous les cycles pour calculer la moyenne
        $average = (int) round($this->analyzer->calculateAverage($cycles));
        if ($average > 0) {
            $cycleLength = $average;
        }

        $ovulationDay = $cycleLength - 14; // phase lutéale fixe 14 jours

        for ($day = 1; $day <= $cycleLength; $day++) {
            $date = (clone $startDate)->modify("+".($day-1)." days");

            if ($day <= $periodLength) {
                $phase = "Menstruation";
                $color = "#ff4d6d";
            } elseif ($day < $ovulationDay) {
                $phase = "Folliculaire";
                $color = "#4dabf7";
            } elseif ($day == $ovulationDay) {
                $phase = "Ovulation";
                $color = "#40c057";
            } else {
                $phase = "Lutéale";
                $color = "#9775fa";
            }

            $events[] = [
                'title' => $phase,
                'start' => $date->format('Y-m-d'),
                'color' => $color,
                'allDay' => true
            ];
        }

        return $events;
    }
}