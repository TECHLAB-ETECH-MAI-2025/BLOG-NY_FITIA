<?php

namespace App\Entity;

use App\Repository\ConversationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConversationRepository::class)]
class Conversation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user1 = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user2 = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdAt;

    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'conversation', orphanRemoval: true)]
    private Collection $messages;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->createdAt = new \DateTime;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser1(): ?User 
    {
         return $this->user1;
    }

    public function setUser1(?User $user1): self 
    { 
        $this->user1 = $user1; 
        return $this; 
    }

    public function getUser2(): ?User 
    {
         return $this->user2; 
    }

    public function setUser2(?User $user2): self 
    { 
        $this->user2 = $user2; 
        return $this; 
    }

    public function getCreatedAt(): ?\DateTimeInterface 
    { 
        return $this->createdAt; 
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self 
    {
         $this->createdAt = $createdAt; 
         return $this; 
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection 
    { 
        return $this->messages; 
    }
}
