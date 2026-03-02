<?php

namespace App\Repository;

use App\Entity\FAQ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FAQRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAQ::class);
    }

    public function findPublished(): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isPublished = true')
            ->orderBy('f.displayOrder', 'ASC')
            ->addOrderBy('f.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isPublished = true')
            ->andWhere('f.category = :category')
            ->setParameter('category', $category)
            ->orderBy('f.displayOrder', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function search(string $query): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isPublished = true')
            ->andWhere('f.question LIKE :query OR f.answer LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('f.viewCount', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getCategories(): array
    {
        return $this->createQueryBuilder('f')
            ->select('DISTINCT f.category')
            ->where('f.isPublished = true')
            ->getQuery()
            ->getSingleColumnResult();
    }

    public function getPopular(int $limit = 5): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isPublished = true')
            ->orderBy('f.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
