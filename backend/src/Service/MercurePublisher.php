<?php

// src/Service/MercurePublisher.php
namespace App\Service;

use App\Entity\User;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class MercurePublisher
{
    public function __construct(
        private HubInterface $hub,
        private string $publicUrl
    ) {}

    public function publishUserStatus(User $user, bool $isOnline): void
    {
        try {
            $this->hub->publish(
                new Update(
                    "/user/{$user->getId()}/status",
                    json_encode([
                        'userId' => $user->getId(),
                        'status' => $isOnline ? 'online' : 'offline',
                        'timestamp' => time(),
                        'lastActivity' => $isOnline 
                            ? (new \DateTimeImmutable())->format(\DateTimeInterface::ATOM)
                            : null
                    ]),
                    true // Privé
                ),
                1.0 // Timeout (secondes)
            );
        } catch (\Throwable $e) {
            throw new \RuntimeException("Mercure publish failed: ".$e->getMessage());
        }
    }
}