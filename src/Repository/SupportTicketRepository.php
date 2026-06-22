<?php

namespace App\Repository;

use App\Entity\SupportTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupportTicket>
 */
class SupportTicketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupportTicket::class);
    }

    /**
     * @return SupportTicket[]
     */
    public function findOpenTickets(): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.status IN (:statuses)')
            ->setParameter('statuses', [SupportTicket::STATUS_OPEN, SupportTicket::STATUS_IN_PROGRESS])
            ->orderBy('t.priority', 'DESC')
            ->addOrderBy('t.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return SupportTicket[]
     */
    public function findByUserEmail(string $email): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.userEmail = :email')
            ->setParameter('email', $email)
            ->orderBy('t.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array<string, mixed>
     */
    public function getStats(): array
    {
        $qb = $this->createQueryBuilder('t');
        
        return [
            'total' => (int) $qb->select('COUNT(t.id)')->getQuery()->getSingleScalarResult(),
            'open' => $this->count(['status' => SupportTicket::STATUS_OPEN]),
            'inProgress' => $this->count(['status' => SupportTicket::STATUS_IN_PROGRESS]),
            'resolved' => $this->count(['status' => SupportTicket::STATUS_RESOLVED]),
            'closed' => $this->count(['status' => SupportTicket::STATUS_CLOSED]),
        ];
    }
}
