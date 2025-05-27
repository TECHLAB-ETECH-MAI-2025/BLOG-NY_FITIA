<?php

namespace App\Service;

use App\Entity\Conversation;
use App\Entity\User;
use App\Repository\ConversationRepository;
use Doctrine\ORM\EntityManagerInterface;

class ConversationService
{
    private $entityManager;
    private $conversationRepository;

    public function __construct(EntityManagerInterface $entityManager, ConversationRepository $conversationRepository)
    {
        $this->entityManager = $entityManager;
        $this->conversationRepository = $conversationRepository;
    }

    /**
     * Creation d'une nouvelle conversation / Deja existe
    */
    public function getOrCreateConversation(User $user1, User $user2): Conversation
    {
        $existingConversation = $this->conversationRepository->findExistingConversation($user1, $user2);
        
        if (existingConversation)
        {
            return $existingConversation;
        }

        $conversation = new Conversation();
        $conversation->setUser1($user1);
        $conversation->setUser2($user2);
    
        $this->entityManager->persist($conversation);
        $this->entityManager->flush();

        return $conversation;
    }

    /**
     * Récupèration de toutes les conversations d'un user
     */
    public function getUserConversations(User $user): array
    {
        return $this->conversationRepository->findByUser($user);
    }
}
