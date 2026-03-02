<?php

namespace App\Repository;

use App\Entity\SupportFeedback;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SupportFeedbackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupportFeedback::class);
    }

    public function getAverageRating(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('AVG(f.rating) as avgRating')
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? round((float) $result, 1) : 0.0;
    }

    public function getRecentFeedback(int $limit = 10): array
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function getRatingDistribution(): array
    {
        $result = $this->createQueryBuilder('f')
            ->select('f.rating, COUNT(f.id) as count')
            ->groupBy('f.rating')
            ->orderBy('f.rating', 'DESC')
            ->getQuery()
            ->getResult();

        $distribution = array_fill(1, 5, 0);
        foreach ($result as $row) {
            $distribution[$row['rating']] = (int) $row['count'];
        }

        return $distribution;
    }

    public function getWouldRecommendPercentage(): float
    {
        $total = $this->count([]);
        if ($total === 0) return 0.0;

        $recommended = $this->count(['wouldRecommend' => true]);
        return round(($recommended / $total) * 100, 1);
    }
}
