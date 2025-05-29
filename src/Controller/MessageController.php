<?php

namespace App\Controller;

use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessageController extends AbstractController
{
    #[Route('/chat', name: 'app_chat')]
    public function index(): Response
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
        ]);
    }

    #[Route('/chat/send', name: 'message_send', methods: ['POST'])]
    public function send(Request $request, EntityManagerInterface $em, Security $security): Response
    {
        $receiverId = $request->request->get('receiver_id');
        $content = $request->request->get('content');
        $sender = $security->getUser();

        $receiver = $em->getRepository(User::class)->find($receiverId);
        if (!$receiver) {
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
    public function chatWithUser(MessageRepository $messageRepo,EntityManagerInterface $em,Security $security): Response
    {
        $currentUser = $security->getUser();

        $messages = $messageRepo->createQueryBuilder('m')
            ->where('(m.sender = :me AND m.receiver = :other) OR (m.sender = :other AND m.receiver = :me)')
            ->setParameters([
                'me' => $currentUser,
                'other' => $otherUser,
            ])
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();

        foreach ($messages as $message) {
            if (
                $message->getReceiver() === $currentUser &&
                !$message->isRead()
            ) {
                $message->setIsRead(true);
            }
        }
        $em->flush();

        return $this->render('chat/conversation.html.twig', [
            'messages' => $messages,
            'otherUser' => $otherUser,
        ]);
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
