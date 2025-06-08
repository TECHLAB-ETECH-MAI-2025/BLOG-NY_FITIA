<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function findUnreadFromSender(int $senderId, int $receiverId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.sender = :sender')
            ->andWhere('m.receiver = :receiver')
            ->andWhere('m.isRead = false')
            ->setParameters([
                'sender' => $senderId,
                'receiver' => $receiverId,
            ])
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

}
