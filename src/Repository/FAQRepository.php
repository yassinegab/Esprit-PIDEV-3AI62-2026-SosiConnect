<?php

namespace App\Repository;

use App\Entity\FAQ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAQ>
 */
class FAQRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAQ::class);
    }

    /**
     * @return FAQ[]
     */
    public function findPublished(): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isPublished = true')
            ->orderBy('f.displayOrder', 'ASC')
            ->addOrderBy('f.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return FAQ[]
     */
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

    /**
     * @return FAQ[]
     */
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

    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->createQueryBuilder('f')
            ->select('DISTINCT f.category')
            ->where('f.isPublished = true')
            ->getQuery()
            ->getSingleColumnResult();
    }

    /**
     * @return FAQ[]
     */
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
