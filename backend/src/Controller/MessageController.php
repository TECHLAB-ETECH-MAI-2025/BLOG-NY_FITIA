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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mercure\HubInterface;

final class MessageController extends AbstractController
{
    #[Route('/api/chat', name: 'app_chat', methods: ['GET'])]
    public function index(UserRepository $userRepository): JsonResponse
    {
        $users = $userRepository->findAll();
        $data = array_map(function ($users) {
            return [
                'id' => $users->getId(),
                'email' => $users->getEmail()
            ];
        }, $users);
        return $this->json($data);
    }

    #[Route('/api/chat/send', name: 'send_message', methods: ['POST'])]
    public function sendMessage(Request $request, EntityManagerInterface $em, Security $security): JsonResponse 
    {
        $data = json_decode($request->getContent(), true);
        $receiverId = $data['receiverId'] ?? null;
        $content = $data['content'] ?? null;

        if (!$receiverId || !$content) {
            return new JsonResponse(['error' => 'Invalid input'], 400);
        }

        $sender = $security->getUser();
        if (!$sender) {
            return new JsonResponse(['error' => 'User not authenticated'], 401);
        }

        $receiver = $em->getRepository(User::class)->find($receiverId);
        if (!$receiver) {
            return new JsonResponse(['error' => 'Receiver not found'], 404);
        }

        $message = new Message();
        $message->setSender($sender);
        $message->setReceiver($receiver);
        $message->setContent($content);
        $message->setCreatedAt(new \DateTimeImmutable());
        $message->setIsRead(false);

        $em->persist($message);
        $em->flush();

        return new JsonResponse(['status' => 'Message sent'], 201);
    }


    #[Route('/chat/messages/{id}', name: 'chat_get_messages', methods: ['GET'])]
    public function getMessages(User $otherUser, MessageRepository $messageRepo, Security $security): JsonResponse
    {
        $currentUser = $security->getUser();
        if (!$currentUser instanceof User) {
            return new JsonResponse(['error' => 'Accès refusé.'], 403);
        }

        $messages = $messageRepo->createQueryBuilder('m')
            ->where('(m.sender = :me AND m.receiver = :other) OR (m.sender = :other AND m.receiver = :me)')
            ->setParameter('me', $currentUser)
            ->setParameter('other', $otherUser)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();

        $response = [];

        foreach ($messages as $message) {
            $response[] = [
                'id' => $message->getId(),
                'sender' => $message->getSender()->getId(),
                'receiver' => $message->getReceiver()->getId(),
                'content' => $message->getContent(),
                'createdAt' => $message->getCreatedAt()->format(\DateTime::ATOM),
                'isRead' => $message->isRead(),
            ];
        }

        return new JsonResponse($response);
    }

    #[Route('/api/chat/{id}', name: 'chat_with_user')]
    public function chatWithUser( User $otherUser,  MessageRepository $messageRepo, EntityManagerInterface $em, Security $security, Request $request): JsonResponse
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
        return $this->json([
            'messages' => array_map(function ($msg) {
                return [
                    'id' => $msg->getId(),
                    'content' => $msg->getContent(),
                    'createdAt' => $msg->getCreatedAt()->format('H:i:s'),
                    'senderId' =>$msg->getSender()->getId(),
                    'receiverId' =>$msg->getReceiver()->getId(),
                ];
            }, $messages),
            'otherUser' => [
                'id' => $otherUser->getId(),
                'email' => $otherUser->getEmail()
            ],
            'currentUserId' => $currentUser->getId()
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
