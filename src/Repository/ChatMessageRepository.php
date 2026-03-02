<?php

namespace App\Repository;

use App\Entity\ChatMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ChatMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatMessage::class);
    }

    public function findUnreadByTicket(int $ticketId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.ticket = :ticketId')
            ->andWhere('m.isRead = false')
            ->setParameter('ticketId', $ticketId)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function markAsRead(int $ticketId): void
    {
        $this->createQueryBuilder('m')
            ->update()
            ->set('m.isRead', true)
            ->where('m.ticket = :ticketId')
            ->setParameter('ticketId', $ticketId)
            ->getQuery()
            ->execute();
    }
}
