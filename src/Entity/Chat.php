<?php
namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["chat"])]
    private ?int $id = null;

    #[ORM\Column(type: "text")]
    #[Groups(["chat"])]
    #[Assert\NotBlank]
    private ?string $content = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["chat"])]
    private ?User $author = null;

    #[ORM\Column]
    #[Groups(["chat"])]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function getContent() : ?string
    {
        return $this->content;
    }

    public function getAuthor() : ?User
    {
        return $this->author;
    }
    
    public function getCreatedAt() : ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function setAuthor(?User $author): static // Méthode setAuthor manquante
    {
        $this->author = $author;
        return $this;
    }
}