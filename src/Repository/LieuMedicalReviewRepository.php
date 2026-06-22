<?php

namespace App\Repository;

use App\Entity\LieuMedicalReview;
use App\Entity\LieuMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LieuMedicalReview>
 */
class LieuMedicalReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuMedicalReview::class);
    }

    /**
     * @return LieuMedicalReview[]
     */
    public function findByLieu(LieuMedical $lieu): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.lieu = :lieu')
            ->setParameter('lieu', $lieu)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getAverageRating(LieuMedical $lieu): float
    {
        $result = $this->createQueryBuilder('r')
            ->select('AVG(r.rating) as avgRating')
            ->where('r.lieu = :lieu')
            ->setParameter('lieu', $lieu)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? round((float) $result, 1) : 0.0;
    }

    public function getReviewCount(LieuMedical $lieu): int
    {
        return $this->count(['lieu' => $lieu]);
    }

    /**
     * @return LieuMedicalReview[]
     */
    public function getRecentReviews(int $limit = 5): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
