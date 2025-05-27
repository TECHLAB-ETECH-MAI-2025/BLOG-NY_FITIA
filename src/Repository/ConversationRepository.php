<?php

namespace App\Repository;

use App\Entity\Conversation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ConversationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversation::class);
    }

    public function findExistingConversation(User $user1, User $user2): ?Conversation
    {
        return $this->createQueryBuilder('c')
            ->where('(c.user1 = :user1 AND c.user2 = :user2) OR (c.user1 = :user2 AND c.user2 = :user1)')
            ->setParameter('user1', $user1)
            ->setParameter('user2', $user2)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.user1 = :user OR c.user2 = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }
}