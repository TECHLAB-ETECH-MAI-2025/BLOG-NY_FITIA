<?php

namespace App\EventSubscriber;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class ActivityListener
{
    public function __construct(
    private HubInterface $hub,
    private EntityManagerInterface $em,
    #[\Autowire('%mercure.public_url%')] private string $mercurePublicUrl
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onActivity', 5],
            LoginSuccessEvent::class => 'onLogin',
            LogoutEvent::class => 'onLogout',
        ];
    }

    private function publishStatus(User $user, bool $isOnline): void
    {
        try {
            $this->hub->publish(new Update(
                "/user/{$user->getId()}/status",
                json_encode([
                    'userId' => $user->getId(),
                    'status' => $isOnline ? 'online' : 'offline',
                    'timestamp' => time()
                ]),
                true // Privé
            ));
        } catch (\Throwable $e) {
            // Fallback immédiat
            $this->em->getConnection()->executeStatement(
                "UPDATE user SET is_online = :status WHERE id = :id",
                ['status' => $isOnline, 'id' => $user->getId()]
            );
        }
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) return;

        $user = $event->getRequest()->getUser();
        if (!$user instanceof User) return;

        $user->setLastActivityAt(new \DateTimeImmutable());
        $this->em->flush();
        $this->publishStatus($user, true);
    }
}