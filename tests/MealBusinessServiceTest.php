<?php

namespace App\Tests\Service;

use App\Entity\Meal;
use App\Service\MealBusinessService;
use PHPUnit\Framework\TestCase;

class MealBusinessServiceTest extends TestCase
{
    private MealBusinessService $service;

    protected function setUp(): void
    {
        $this->service = new MealBusinessService();
    }

    public function testCalorieCountValid(): void
    {
        $meal = new Meal();
        $meal->setCalories(1500);
        $this->assertTrue($this->service->isCalorieCountValid($meal));

        $meal->setCalories(2500);
        $this->assertFalse($this->service->isCalorieCountValid($meal));
    }

    public function testNutritionalAdviceHighSugar(): void
    {
        $meal = new Meal();
        $meal->setCalories(1000);
        $meal->setSugar(60); // 60g * 4 = 240 calories (24% of 1000)
        
        $advice = $this->service->getNutritionalAdvice($meal);
        $this->assertStringContainsString('trop sucré', $advice);
    }

    public function testNutritionalAdviceLowProtein(): void
    {
        $meal = new Meal();
        $meal->setCalories(1000);
        $meal->setSugar(10); // 40 calories (4%)
        $meal->setProtein(5); // < 15

        $advice = $this->service->getNutritionalAdvice($meal);
        $this->assertStringContainsString('source de protéines', $advice);
    }

    public function testNutritionalAdviceBalanced(): void
    {
        $meal = new Meal();
        $meal->setCalories(1000);
        $meal->setSugar(10);
        $meal->setProtein(20);

        $advice = $this->service->getNutritionalAdvice($meal);
        $this->assertStringContainsString('équilibré', $advice);
    }
}
