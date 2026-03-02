<?php

namespace App\Tests\Entity;

use App\Entity\Don;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class DonTest extends TestCase
{
    private ValidatorInterface $validator;

    protected function setUp(): void
    {
        $this->validator = Validation::createValidatorBuilder()
            ->enableAttributeMapping()
            ->getValidator();
    }

    public function testDonCreation(): void
    {
        $don = new Don();
        
        self::assertEquals('EN_ATTENTE', $don->getStatut());
        self::assertInstanceOf(\DateTime::class, $don->getDateDon());
        self::assertFalse($don->isUrgence());
    }

    public function testSetTypeDon(): void
    {
        $don = new Don();
        $don->setTypeDon('sang');
        
        self::assertEquals('sang', $don->getTypeDon());
    }

    public function testSetRegion(): void
    {
        $don = new Don();
        $don->setRegion('Tunis');
        
        self::assertEquals('Tunis', $don->getRegion());
    }

    public function testSetStatut(): void
    {
        $don = new Don();
        $don->setStatut('VALIDÉ');
        
        self::assertEquals('VALIDÉ', $don->getStatut());
    }

    public function testInvalidTypeDon(): void
    {
        $don = new Don();
        $don->setTypeDon('invalid_type');
        $don->setRegion('Tunis');

        $errors = $this->validator->validate($don);
        
        self::assertGreaterThan(0, count($errors));
    }

    public function testEmptyRegion(): void
    {
        $don = new Don();
        $don->setTypeDon('sang');
        $don->setRegion('');

        $errors = $this->validator->validate($don);
        
        self::assertGreaterThan(0, count($errors));
    }

    public function testStatusBadgeClass(): void
    {
        $don = new Don();
        
        $don->setStatut('VALIDÉ');
        self::assertStringContainsString('green', $don->getStatusBadgeClass());
        
        $don->setStatut('REFUSÉ');
        self::assertStringContainsString('red', $don->getStatusBadgeClass());
        
        $don->setStatut('EN_ATTENTE');
        self::assertStringContainsString('yellow', $don->getStatusBadgeClass());
    }

    public function testStatusIcon(): void
    {
        $don = new Don();
        
        $don->setStatut('VALIDÉ');
        self::assertEquals('✔', $don->getStatusIcon());
        
        $don->setStatut('REFUSÉ');
        self::assertEquals('✖', $don->getStatusIcon());
        
        $don->setStatut('EN_ATTENTE');
        self::assertEquals('⏳', $don->getStatusIcon());
    }
}
