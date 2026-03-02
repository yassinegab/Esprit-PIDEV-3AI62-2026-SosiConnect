<?php

namespace App\Service;

use App\Entity\Don;
use App\Entity\Donneur;
use App\Entity\DemandeDon;
use Doctrine\ORM\EntityManagerInterface;

class DonorMatchingService
{
    public const MATCH_HIGH = 80;
    public const MATCH_MEDIUM = 50;
    public const MATCH_LOW = 0;

    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    public function findMatchingDonors(DemandeDon $demande): array
    {
        $donneurRepository = $this->entityManager->getRepository(Donneur::class);
        
        $qb = $donneurRepository->createQueryBuilder('d')
            ->where('d.disponible = true')
            ->orderBy('d.dateDernierDon', 'ASC');

        $donors = $qb->getQuery()->getResult();
        
        $matches = [];
        foreach ($donors as $donor) {
            $score = $this->calculateMatchScore($donor, $demande);
            if ($score > 0) {
                $matches[] = [
                    'donor' => $donor,
                    'score' => $score,
                    'level' => $this->getMatchLevel($score),
                    'reasons' => $this->getMatchReasons($donor, $demande),
                ];
            }
        }

        usort($matches, fn($a, $b) => $b['score'] <=> $a['score']);

        return $matches;
    }

    public function findMatchingRequests(Donneur $donor): array
    {
        $demandeRepository = $this->entityManager->getRepository(DemandeDon::class);
        
        $demandes = $demandeRepository->createQueryBuilder('d')
            ->orderBy('d.urgence', 'DESC')
            ->addOrderBy('d.dateDemande', 'ASC')
            ->getQuery()
            ->getResult();

        $matches = [];
        foreach ($demandes as $demande) {
            $score = $this->calculateMatchScore($donor, $demande);
            if ($score > 0) {
                $matches[] = [
                    'demande' => $demande,
                    'score' => $score,
                    'level' => $this->getMatchLevel($score),
                    'reasons' => $this->getMatchReasons($donor, $demande),
                ];
            }
        }

        usort($matches, fn($a, $b) => $b['score'] <=> $a['score']);

        return $matches;
    }

    public function calculateMatchScore(Donneur $donor, DemandeDon $demande): int
    {
        $score = 0;

        if ($demande->getTypeDemande() === 'sang') {
            if ($donor->getGroupeSanguin() && $demande->getTypeSanguin()) {
                if ($this->isBloodTypeCompatible($donor->getGroupeSanguin(), $demande->getTypeSanguin())) {
                    $score += 50;
                    if ($donor->getGroupeSanguin() === $demande->getTypeSanguin()) {
                        $score += 20;
                    }
                } else {
                    return 0;
                }
            }
        }

        if ($donor->getAge() >= 18 && $donor->getAge() <= 60) {
            $score += 10;
        }

        if ($donor->getDateDernierDon()) {
            $daysSinceLastDon = (new \DateTime())->diff($donor->getDateDernierDon())->days;
            if ($daysSinceLastDon >= 90) {
                $score += 15;
            } elseif ($daysSinceLastDon >= 56) {
                $score += 10;
            }
        } else {
            $score += 15;
        }

        return min(100, $score);
    }

    public function isBloodTypeCompatible(string $donorType, string $recipientType): bool
    {
        $compatibility = [
            'O-' => ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
            'O+' => ['A+', 'B+', 'AB+', 'O+'],
            'A-' => ['A+', 'A-', 'AB+', 'AB-'],
            'A+' => ['A+', 'AB+'],
            'B-' => ['B+', 'B-', 'AB+', 'AB-'],
            'B+' => ['B+', 'AB+'],
            'AB-' => ['AB+', 'AB-'],
            'AB+' => ['AB+'],
        ];

        return isset($compatibility[$donorType]) && in_array($recipientType, $compatibility[$donorType]);
    }

    private function getMatchLevel(int $score): string
    {
        if ($score >= self::MATCH_HIGH) {
            return 'high';
        }
        if ($score >= self::MATCH_MEDIUM) {
            return 'medium';
        }
        return 'low';
    }

    private function getMatchReasons(Donneur $donor, DemandeDon $demande): array
    {
        $reasons = [];

        if ($demande->getTypeDemande() === 'sang' && $donor->getGroupeSanguin() === $demande->getTypeSanguin()) {
            $reasons[] = 'Groupe sanguin identique';
        } elseif ($this->isBloodTypeCompatible($donor->getGroupeSanguin(), $demande->getTypeSanguin())) {
            $reasons[] = 'Groupe sanguin compatible';
        }

        if (!$donor->getDateDernierDon()) {
            $reasons[] = 'Premier don';
        } else {
            $days = (new \DateTime())->diff($donor->getDateDernierDon())->days;
            if ($days >= 90) {
                $reasons[] = 'Éligible au don (3+ mois)';
            }
        }

        if ($donor->getAge() >= 18 && $donor->getAge() <= 50) {
            $reasons[] = 'Tranche d\'âge idéale';
        }

        return $reasons;
    }

    public function autoMatchDonations(): array
    {
        $demandes = $this->entityManager->getRepository(DemandeDon::class)
            ->findBy(['urgence' => true], ['dateDemande' => 'ASC']);

        $matches = [];
        foreach ($demandes as $demande) {
            $donorMatches = $this->findMatchingDonors($demande);
            if (!empty($donorMatches)) {
                $matches[] = [
                    'demande' => $demande,
                    'topDonors' => array_slice($donorMatches, 0, 3),
                ];
            }
        }

        return $matches;
    }
}
