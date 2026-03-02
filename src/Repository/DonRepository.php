<?php

namespace App\Repository;

use App\Entity\Don;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class DonRepository extends ServiceEntityRepository
{
    public const ITEMS_PER_PAGE = 10;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Don::class);
    }

    public function findPaginated(int $page = 1, array $filters = []): array
    {
        $qb = $this->createQueryBuilder('d');

        if (!empty($filters['search'])) {
            $qb->andWhere('d.region LIKE :search OR d.typeDon LIKE :search')
               ->setParameter('search', '%' . $filters['search'] . '%');
        }

        if (!empty($filters['statut'])) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        if (!empty($filters['typeDon'])) {
            $qb->andWhere('d.typeDon = :typeDon')
               ->setParameter('typeDon', $filters['typeDon']);
        }

        if (!empty($filters['urgence'])) {
            $qb->andWhere('d.urgence = :urgence')
               ->setParameter('urgence', $filters['urgence'] === 'true');
        }

        if (!empty($filters['dateFrom'])) {
            $qb->andWhere('d.dateDon >= :dateFrom')
               ->setParameter('dateFrom', new \DateTime($filters['dateFrom']));
        }

        if (!empty($filters['dateTo'])) {
            $qb->andWhere('d.dateDon <= :dateTo')
               ->setParameter('dateTo', new \DateTime($filters['dateTo'] . ' 23:59:59'));
        }

        $sortField = $filters['sortField'] ?? 'd.dateDon';
        $sortOrder = $filters['sortOrder'] ?? 'DESC';
        $qb->orderBy($sortField, $sortOrder);

        $qb->setFirstResult(($page - 1) * self::ITEMS_PER_PAGE)
           ->setMaxResults(self::ITEMS_PER_PAGE);

        $paginator = new Paginator($qb->getQuery());

        return [
            'items' => iterator_to_array($paginator->getIterator()),
            'total' => count($paginator),
            'pages' => (int) ceil(count($paginator) / self::ITEMS_PER_PAGE),
            'currentPage' => $page
        ];
    }

    public function getStats(): array
    {
        $qb = $this->createQueryBuilder('d');

        return [
            'total' => $qb->select('COUNT(d.id)')->getQuery()->getSingleScalarResult(),
            'valides' => $this->count(['statut' => 'VALIDÉ']),
            'refuses' => $this->count(['statut' => 'REFUSÉ']),
            'attente' => $this->count(['statut' => 'EN_ATTENTE']),
            'sang' => $this->count(['typeDon' => 'sang']),
            'organe' => $this->count(['typeDon' => 'organe']),
            'urgences' => $this->count(['urgence' => true]),
        ];
    }

    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.typeDon = :type')
            ->setParameter('type', $type)
            ->orderBy('d.dateDon', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.dateDon', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countByStatut(string $statut): int
    {
        return $this->count(['statut' => $statut]);
    }

    public function countByType(string $type): int
    {
        return $this->count(['typeDon' => $type]);
    }
}
