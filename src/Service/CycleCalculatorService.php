<?php

namespace App\Service;

use App\Entity\Cycle;
use Doctrine\Common\Collections\Collection;

class CycleCalculatorService
{
    private const DEFAULT_CYCLE_LENGTH = 28;
    private const LUTEAL_PHASE_LENGTH = 14;

    /**
     * Calcule la durée moyenne du cycle pour l'utilisateur
     */
    public function calculateAverageCycleLength(array $cycles): int
    {
        if (count($cycles) < 2) {
            return self::DEFAULT_CYCLE_LENGTH;
        }

        // Trier les cycles par date de début
        usort($cycles, fn(Cycle $a, Cycle $b) => $a->getDateDebutM() <=> $b->getDateDebutM());

        $totalDays = 0;
        $count = 0;

        for ($i = 0; $i < count($cycles) - 1; $i++) {
            $currentStart = $cycles[$i]->getDateDebutM();
            $nextStart = $cycles[$i + 1]->getDateDebutM();

            $diff = $nextStart->diff($currentStart)->days;
            // Ignorer les cycles aberrants (> 45 jours ou < 21 jours) pour la moyenne
            if ($diff >= 21 && $diff <= 45) {
                $totalDays += $diff;
                $count++;
            }
        }

        return $count > 0 ? (int) round($totalDays / $count) : self::DEFAULT_CYCLE_LENGTH;
    }

    /**
     * Prédit les prochains événements basés sur le dernier cycle
     */
    public function predictNextEvents(Cycle $lastCycle, int $avgLength): array
    {
        $lastStart = clone $lastCycle->getDateDebutM();

        // Prochaines règles
        $nextPeriodStart = (clone $lastStart)->modify("+{$avgLength} days");
        $nextPeriodEnd = (clone $nextPeriodStart)->modify("+4 days"); // Durée moyenne de 5 jours par défaut

        // Ovulation (14 jours avant les prochaines règles)
        $ovulationDate = (clone $nextPeriodStart)->modify("-" . self::LUTEAL_PHASE_LENGTH . " days");

        // Fenêtre fertile (5 jours avant ovulation + jour J)
        $fertileStart = (clone $ovulationDate)->modify("-5 days");
        $fertileEnd = clone $ovulationDate;

        return [
            'next_period_start' => $nextPeriodStart,
            'next_period_end' => $nextPeriodEnd,
            'ovulation' => $ovulationDate,
            'fertile_start' => $fertileStart,
            'fertile_end' => $fertileEnd,
            'avg_length' => $avgLength
        ];
    }

    /**
     * Génère les événements complets pour le calendrier (Passé + Futur)
     */
    public function generateCalendarEvents(array $cycles): array
    {
        if (empty($cycles)) {
            return [];
        }

        // Trier les cycles
        usort($cycles, fn(Cycle $a, Cycle $b) => $a->getDateDebutM() <=> $b->getDateDebutM());

        $avgLength = $this->calculateAverageCycleLength($cycles);
        $events = [];

        // 1. Traiter les cycles passés (réels)
        foreach ($cycles as $cycle) {
            // Règles (Rouge)
            $events[] = [
                'title' => 'Règles',
                'start' => $cycle->getDateDebutM()->format('Y-m-d'),
                'end' => $cycle->getDateFinM()->modify('+1 day')->format('Y-m-d'), // FullCalendar exclude end date
                'color' => '#ef4444', // Red-500
                'description' => 'Période de menstruation',
                'type' => 'menstruation'
            ];
        }

        // 2. Prédire sur le dernier cycle connu
        $lastCycle = end($cycles);
        $predictions = $this->predictNextEvents($lastCycle, $avgLength);

        // Phase Folliculaire (Bleu) : Fin des dernières règles -> Début fenêtre fertile
        $follicularStart = clone $lastCycle->getDateFinM();
        $follicularEnd = clone $predictions['fertile_start'];

        if ($follicularStart < $follicularEnd) {
            $events[] = [
                'title' => 'Phase Folliculaire',
                'start' => $follicularStart->modify('+1 day')->format('Y-m-d'),
                'end' => $follicularEnd->format('Y-m-d'),
                'color' => '#3b82f6', // Blue-500
                'display' => 'background', // Arrière-plan
                'type' => 'follicular'
            ];
        }

        // Fenêtre Fertile (Vert)
        $events[] = [
            'title' => 'Fenêtre Fertile',
            'start' => $predictions['fertile_start']->format('Y-m-d'),
            'end' => $predictions['fertile_end']->modify('+1 day')->format('Y-m-d'),
            'color' => '#10b981', // Emerald-500
            'display' => 'background',
            'type' => 'fertile'
        ];

        // Ovulation (Violet)
        $events[] = [
            'title' => 'Ovulation 🥚',
            'start' => $predictions['ovulation']->format('Y-m-d'),
            'allDay' => true,
            'color' => '#8b5cf6', // Violet-500
            'className' => 'ovulation-event', // Pour CSS spécifique
            'type' => 'ovulation'
        ];

        // Phase Lutéale (Jaune) : Fin ovulation -> Début prochaines règles
        $lutealStart = (clone $predictions['ovulation'])->modify('+1 day');
        $lutealEnd = clone $predictions['next_period_start'];

        $events[] = [
            'title' => 'Phase Lutéale',
            'start' => $lutealStart->format('Y-m-d'),
            'end' => $lutealEnd->format('Y-m-d'),
            'color' => '#eab308', // Yellow-500
            'display' => 'background',
            'type' => 'luteal'
        ];

        // Prochaines règles estimées (Rouge clair / pointillé)
        $events[] = [
            'title' => 'Règles prévues',
            'start' => $predictions['next_period_start']->format('Y-m-d'),
            'end' => $predictions['next_period_end']->format('Y-m-d'),
            'color' => '#fca5a5', // Red-300
            'className' => 'predicted-period',
            'type' => 'prediction'
        ];

        return [
            'events' => $events,
            'stats' => [
                'avg_length' => $avgLength,
                'next_period' => $predictions['next_period_start']->format('d M Y'),
                'ovulation' => $predictions['ovulation']->format('d M Y'),
                'current_phase' => $this->determineCurrentPhase($lastCycle, $predictions),
                'notifications' => $this->generateNotifications($lastCycle, $predictions, $avgLength)
            ]
        ];
    }

    private function determineCurrentPhase(Cycle $lastCycle, array $predictions): string
    {
        $today = new \DateTime();

        if ($today >= $lastCycle->getDateDebutM() && $today <= $lastCycle->getDateFinM()) {
            return 'Menstruation';
        }
        if ($today >= $predictions['fertile_start'] && $today <= $predictions['fertile_end']) {
            return 'Fenêtre Fertile';
        }
        if ($today->format('Y-m-d') === $predictions['ovulation']->format('Y-m-d')) {
            return 'Ovulation';
        }
        if ($today > $lastCycle->getDateFinM() && $today < $predictions['fertile_start']) {
            return 'Phase Folliculaire';
        }
        if ($today > $predictions['ovulation'] && $today < $predictions['next_period_start']) {
            return 'Phase Lutéale';
        }

        return 'Inconnue';
    }

    private function generateNotifications(Cycle $lastCycle, array $predictions, int $avgLength): array
    {
        $notifications = [];
        $today = new \DateTime();

        // 1. Notification prochaine règles
        $diff = $today->diff($predictions['next_period_start']);
        if ($diff->invert == 0 && $diff->days <= 3) {
            $notifications[] = [
                'type' => 'warning',
                'message' => "Vos règles devraient commencer dans {$diff->days} jour(s)."
            ];
        }

        // 2. Notification ovulation
        $diffOv = $today->diff($predictions['ovulation']);
        if ($diffOv->invert == 0 && $diffOv->days <= 1) {
            $notifications[] = [
                'type' => 'info',
                'message' => "Ovulation prévue demain ou aujourd'hui. Pic de fertilité !"
            ];
        }

        // 3. Alerte cycle irrégulier (trop court ou trop long)
        if ($avgLength < 21) {
            $notifications[] = [
                'type' => 'danger',
                'message' => "Vos cycles sont très courts ($avgLength jours). Consultez un spécialiste si cela persiste."
            ];
        } elseif ($avgLength > 35) {
            $notifications[] = [
                'type' => 'danger',
                'message' => "Vos cycles sont longs ($avgLength jours). Cela peut être normal ou lié au stress."
            ];
        }

        return $notifications;
    }
}
