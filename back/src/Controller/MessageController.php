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

    #[Route('/chat/send', name: 'chat_send', methods: ['POST'])]
    public function send(Request $request, EntityManagerInterface $em, Security $security): JsonResponse
    {
        $content = $request->request->get('content');
        if (!$content) {
            return new JsonResponse(['error' => 'Le message est vide.'], 400);
        }
        $receiverId = $request->request->get('receiver_id');
        if (!$receiverId) {
            return new JsonResponse(['error' => 'Receiver ID missing.'], 400);
        }
        $sender = $security->getUser();

        $receiver = $em->getRepository(User::class)->find($receiverId);
        if (!$receiver) {
            return new JsonResponse(['error' => 'Receiver not found.'], 404);
        }

        $message = new Message();
        $message->setSender($sender);
        $message->setReceiver($receiver);
        $message->setContent($content);
        $message->setCreatedAt(new \DateTimeImmutable());
        $message->setIsRead(false);

        $em->persist($message);
        $em->flush();

        return new JsonResponse([
            'id' => $message->getId(),
            'sender' => $sender->getId(),
            'receiver' => $receiver->getId(),
            'content' => $message->getContent(),
            'createdAt' => $message->getCreatedAt()->format(\DateTime::ATOM),
            'isRead' => $message->isRead()
        ]);
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

    #[Route('/chat/{id}', name: 'chat_with_user')]
    public function chatWithUser(
        User $otherUser,
        MessageRepository $messageRepo,
        EntityManagerInterface $em,
        Security $security,
        HubInterface $hub
    ): Response {
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
            'mercure_topic' => '/user/'.$currentUser->getId().'/messages',
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
