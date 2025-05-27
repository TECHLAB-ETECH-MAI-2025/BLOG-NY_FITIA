<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $sender = null;

    #[ORM\ManyToOne(targetEntity: Conversation::class, inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Conversation $conversation = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $sentAt;

    public function __construct()
    {
        $this->sentAt = new \DateTime();
    }

    public function getId(): ?int
    { 
        return $this->id; 
    }

    public function getContent(): ?string 
    { 
        return $this->content; 
    }

    public function setContent(string $content): self 
    { 
        $this->content = $content; return $this; 
    }

    public function getSender(): ?User 
    { 
        return $this->sender; 
    }

    public function setSender(?User $sender): self 
    { 
        $this->sender = $sender; return $this; 
    }

    public function getConversation(): ?Conversation 
    { 
        return $this->conversation; 
    }

    public function setConversation(?Conversation $conversation): self 
    { 
        $this->conversation = $conversation; 
        return $this; 
    }

    public function getSentAt(): ?\DateTimeInterface 
    { 
        return $this->sentAt; 
    }

    public function setSentAt(\DateTimeInterface $sentAt): self 
    { 
        $this->sentAt = $sentAt; 
        return $this; 
    }
}