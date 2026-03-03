<?php

namespace App\Service;

use App\Entity\Meal;

class MealBusinessService
{
    private const MAX_CALORIES = 2000;
    private const SUGAR_RATIO_LIMIT = 0.20; // 20%

    /**
     * Validates if the meal calories are within the acceptable limit.
     */
    public function isCalorieCountValid(Meal $meal): bool
    {
        return ($meal->getCalories() ?? 0) <= self::MAX_CALORIES;
    }

    /**
     * Analyzes the sugar content relative to calories.
     * 1g sugar ≈ 4 calories.
     */
    public function getNutritionalAdvice(Meal $meal): string
    {
        $calories = $meal->getCalories() ?? 0;
        $sugar = $meal->getSugar() ?? 0;

        if ($calories <= 0) {
            return "Veuillez renseigner les calories pour obtenir des conseils.";
        }

        $sugarCalories = $sugar * 4;
        $sugarRatio = $sugarCalories / $calories;

        if ($sugarRatio > self::SUGAR_RATIO_LIMIT) {
            return "Attention : Ce repas est trop sucré (plus de 20% des calories proviennent du sucre).";
        }

        if (($meal->getProtein() ?? 0) < 15) {
            return "Conseil : Pensez à ajouter une source de protéines à ce repas.";
        }

        return "Ce repas semble équilibré !";
    }
}
