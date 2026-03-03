<?php

namespace App\Tests\Service;

use App\Entity\UserWellBeingData;
use App\Service\UserWellBeingBusinessService;
use PHPUnit\Framework\TestCase;

class UserWellBingDataTest extends TestCase
{
    private UserWellBeingBusinessService $service;

    protected function setUp(): void
    {
        $this->service = new UserWellBeingBusinessService();
    }

    public function testCalculateStressScore(): void
    {
        $data = new UserWellBeingData();
        // Set some values (total 15/50)
        $data->setWorkEnvironment(2);
        $data->setLowAcademicConfidence(3);
        $data->setSleepProblems(1);
        $data->setHeadaches(2);
        $data->setAnxietyTension(4);
        $data->setHeartbeatPalpitations(3);
        
        $score = $this->service->calculateStressScore($data);
        $this->assertEquals(30, $score); // 15 * 2 = 30
    }

    public function testGetHealthStatusCritical(): void
    {
        $data = new UserWellBeingData();
        $data->setHeartbeatPalpitations(5);
        
        $status = $this->service->getHealthStatus($data);
        $this->assertStringContainsString('Critique', $status);
    }

    public function testGetHealthStatusWarning(): void
    {
        $data = new UserWellBeingData();
        $data->setAnxietyTension(4);
        
        $status = $this->service->getHealthStatus($data);
        $this->assertStringContainsString('Avertissement', $status);
    }

    public function testGetHealthStatusStable(): void
    {
        $data = new UserWellBeingData();
        $data->setWorkEnvironment(1);
        $data->setSleepProblems(1);
        
        $status = $this->service->getHealthStatus($data);
        $this->assertStringContainsString('Stable', $status);
    }
}
