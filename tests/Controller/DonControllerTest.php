<?php

namespace App\Tests\Controller;

use App\Entity\Don;
use App\Repository\DonRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class DonControllerTest extends WebTestCase
{
    public function testNewPageLoads(): void
    {
        $client = static::createClient();
        $client->request('GET', '/don/new');

        self::assertResponseIsSuccessful();
        self::assertSelectorExists('form');
    }

    public function testDonCreationWithValidData(): void
    {
        $client = static::createClient();
        $donRepository = static::getContainer()->get(DonRepository::class);
        
        $initialCount = $donRepository->count([]);

        $client->request('POST', '/don/new', [
            'type_don' => 'sang',
            'type_sanguin' => 'A+',
            'region' => 'Tunis',
            'urgence' => '1',
        ]);

        self::assertEquals($initialCount + 1, $donRepository->count([]));
    }

    public function testDonCreationWithInvalidType(): void
    {
        $client = static::createClient();
        
        $client->request('POST', '/don/new', [
            'type_don' => 'invalid',
            'region' => 'Tunis',
        ]);

        self::assertResponseIsSuccessful();
    }
}
