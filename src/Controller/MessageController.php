<?php

namespace App\Controller;

use App\Repository\MessageRepository;
use App\Entity\User;
use App\Entity\Message;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security; 
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mercure\HubInterface;

final class MessageController extends AbstractController
{
    #[Route('/chat', name: 'app_chat')]
    public function index(HubInterface $hub, MessageRepository $messageRepository, UserRepository $userRepository): Response
    {
        $currentUser = $this->getUser();
        $users = $userRepository->findAll();

        return $this->render('chat/index.html.twig', [
            'users' => $users,
            'messages' => $messageRepository->findAll(),
            'mercure_publish_url' => $hub->getPublicUrl(),
            'mercure_topic' => '/chat/'.($this->getUser()?->getId() ?? 'public'),
            'current_user' => $this->getUser()?->getUserIdentifier()
        ]);
    }

    #[Route('/chat/send', name: 'chat_send', methods: ['POST'])]
    public function send(Request $request, EntityManagerInterface $em, Security $security): Response
    {
        $content = $request->request->get('content');
        if (!$content) 
        {
            throw new \InvalidArgumentException('Le message est vide.');
        }
        $receiverId = $request->request->get('receiver_id');
        if (!$receiverId) 
        {
            throw $this->createNotFoundException('Receiver ID missing.');
        }
        $sender = $security->getUser();

        $receiver = $em->getRepository(User::class)->find($receiverId);
        if (!$receiver)
        {
            throw $this->createNotFoundException('Receiver not found.');
        }
        $message = new Message();
        $message->setSender($sender);
        $message->setReceiver($receiver);
        $message->setContent($content);
        $message->setCreatedAt(new \DateTimeImmutable());
        $message->setIsRead(false);

        $em->persist($message);
        $em->flush();

        return $this->redirectToRoute('chat_with_user', ['id' => $receiverId]);
    }

    #[Route('/chat/{id}', name: 'chat_with_user')]
    public function chatWithUser(User $otherUser, MessageRepository $messageRepo, EntityManagerInterface $em, Security $security, HubInterface $hub): Response
    {
        $currentUser = $security->getUser();
        
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $messages = $messageRepo->createQueryBuilder('m')
            ->where('(m.sender = :me AND m.receiver = :other) OR (m.sender = :other AND m.receiver = :me)')
            ->setParameter('me', $currentUser)
            ->setParameter('other', $otherUser)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();

        foreach ($messages as $message) {
            if ($message->getReceiver() === $currentUser && !$message->isRead()) {
                $message->setIsRead(true);
            }
        }
        $em->flush();

        return $this->render('chat/conversation.html.twig', [
            'messages' => $messages,
            'otherUser' => $otherUser,
            'currentUser' => $currentUser,
            'mercure_publish_url' => $hub->getPublicUrl(),
            'mercure_topic' => '/user/'.$currentUser->getId().'/messages', // Assure-toi que ça correspond à ta JS
        ]);
    }

    #[Route('/chat/mark-read', name: 'chat_mark_read', methods: ['POST'])]
    public function markRead(Request $request, EntityManagerInterface $em, Security $security): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $fromUserId = $data['fromUser'] ?? null;

        if (!$fromUserId) {
            return new JsonResponse(['error' => 'Invalid data'], 400);
        }

        $currentUser = $security->getUser();
        $messages = $em->getRepository(Message::class)->findUnreadFromSender($fromUserId, $currentUser->getId());

        foreach ($messages as $message) {
            $message->setIsRead(true);
        }

        $em->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/chat/{id}', name: 'chat_show')]
    public function show(User $receiver, MessageRepository $messageRepo, Security $security): Response
    {
        $currentUser = $security->getUser();

        if ($receiver === $currentUser) {
            throw $this->createAccessDeniedException();
        }

        $messages = $messageRepo->findConversation($currentUser, $receiver);

        return $this->render('chat/show.html.twig', [
            'receiver' => $receiver,
            'messages' => $messages,
        ]);
    }
}
