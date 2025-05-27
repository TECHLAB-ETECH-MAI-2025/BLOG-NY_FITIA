<?php

namespace App\Service;

use App\Entity\Conversation;
use App\Entity\Message;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class MessageService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function sendMessage(Conversation $conversation, User $sender, string $content): Message
    {
        $message = new Message();
        $message->setContent($content);
        $message->setSender($sender);
        $message->setConversation($conversation);

        $this->entityManager->persist($message);
        $this->entityManager->flush();

        return $message;
    }

    public function getConversationMessages(Conversation $conversation, int $limit = 50): array
    {
        return $conversation->getMessages()->slice(0, $limit);
    }
}