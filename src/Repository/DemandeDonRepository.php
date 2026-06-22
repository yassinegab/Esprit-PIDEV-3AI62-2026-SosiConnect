<?php
namespace App\Repository;

use App\Entity\DemandeDon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeDon>
 *
 * @method DemandeDon|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeDon|null findOneBy(array<string, mixed> $criteria, array<string, string> $orderBy = null)
 * @method DemandeDon[]    findAll()
 * @method DemandeDon[]    findBy(array<string, mixed> $criteria, array<string, string> $orderBy = null, $limit = null, $offset = null)
 */
class DemandeDonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeDon::class);
    }
}
