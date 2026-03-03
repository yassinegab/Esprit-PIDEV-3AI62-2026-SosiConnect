<?php

namespace App\Service;

use App\Entity\UserWellBeingData;

class UserWellBeingBusinessService
{
    /**
     * Calculates a composite stress score from 0 to 100 based on all 10 factors.
     * Each factor is rated 0-5, totaling 50 max points.
     */
    public function calculateStressScore(UserWellBeingData $data): int
    {
        $total = 0;
        $total += $data->getWorkEnvironment() ?? 0;
        $total += $data->getLowAcademicConfidence() ?? 0;
        $total += $data->getSleepProblems() ?? 0;
        $total += $data->getHeadaches() ?? 0;
        $total += $data->getAnxietyTension() ?? 0;
        $total += $data->getHeartbeatPalpitations() ?? 0;
        $total += $data->getIrritability() ?? 0;
        $total += $data->getRestlessness() ?? 0;
        $total += $data->getSubjectConfidence() ?? 0;
        $total += $data->getClassAttendance() ?? 0;

        // Scale 0-50 to 0-100
        return $total * 2;
    }

    /**
     * Determines the health status based on critical symptoms.
     */
    public function getHealthStatus(UserWellBeingData $data): string
    {
        $palpitations = $data->getHeartbeatPalpitations() ?? 0;
        $headaches = $data->getHeadaches() ?? 0;
        $anxiety = $data->getAnxietyTension() ?? 0;

        if ($palpitations >= 5 || $headaches >= 5) {
            return "Critique : Consultation médicale recommandée immédiatement.";
        }

        if ($palpitations >= 3 || $headaches >= 3 || $anxiety >= 4) {
            return "Avertissement : Niveau de stress élevé, reposez-vous.";
        }

        return "Stable : Votre état semble normal.";
    }
}
