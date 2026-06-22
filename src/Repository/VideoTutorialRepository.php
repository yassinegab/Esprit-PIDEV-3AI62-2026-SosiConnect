<?php

namespace App\Repository;

use App\Entity\VideoTutorial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VideoTutorial>
 */
class VideoTutorialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoTutorial::class);
    }

    /**
     * @return VideoTutorial[]
     */
    public function findPublished(): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.isPublished = true')
            ->orderBy('v.displayOrder', 'ASC')
            ->addOrderBy('v.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return VideoTutorial[]
     */
    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.isPublished = true')
            ->andWhere('v.category = :category')
            ->setParameter('category', $category)
            ->orderBy('v.displayOrder', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return VideoTutorial[]
     */
    public function search(string $query): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.isPublished = true')
            ->andWhere('v.title LIKE :query OR v.description LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('v.viewCount', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->createQueryBuilder('v')
            ->select('DISTINCT v.category')
            ->where('v.isPublished = true')
            ->getQuery()
            ->getSingleColumnResult();
    }

    /**
     * @return VideoTutorial[]
     */
    public function getPopular(int $limit = 5): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.isPublished = true')
            ->orderBy('v.viewCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
