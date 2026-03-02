<?php

namespace App\Repository;

use App\Entity\ReponseDon;
use App\Entity\DemandeDon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReponseDonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReponseDon::class);
    }

    public function findByDemande(DemandeDon $demande): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.demande = :demande')
            ->setParameter('demande', $demande)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByEmail(string $email): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.donneurEmail = :email')
            ->setParameter('email', $email)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countByDemande(DemandeDon $demande): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.demande = :demande')
            ->setParameter('demande', $demande)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getPendingCountByDemande(DemandeDon $demande): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.demande = :demande')
            ->andWhere('r.status = :status')
            ->setParameter('demande', $demande)
            ->setParameter('status', ReponseDon::STATUS_PENDING)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
