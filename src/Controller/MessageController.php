<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Service\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/messages')]
class MessageController extends AbstractController
{
    public function __construct(
        private MessageService $messageService
    ) {}

    // Envoie un message dans une conversation
    #[Route('/send/{conversationId}', name: 'app_message_send', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function send(int $conversationId, Request $request): JsonResponse
    {
        $user = $this->getUser();
        $conversation = $this->getDoctrine()->getRepository(Conversation::class)->find($conversationId);

        if (!$conversation) {
            throw $this->createNotFoundException('Conversation non trouvée !');
        }

        // Vérifie que l'utilisateur fait partie de la conversation
        if ($conversation->getUser1() !== $user && $conversation->getUser2() !== $user) {
            throw $this->createAccessDeniedException('Accès refusé !');
        }

        $data = json_decode($request->getContent(), true);
        $message = $this->messageService->sendMessage($conversation, $user, $data['content']);

        return $this->json([
            'message' => 'Message envoyé !',
            'id' => $message->getId(),
        ]);
    }

    // Récupère les messages d'une conversation
    #[Route('/history/{conversationId}', name: 'app_message_history', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function history(int $conversationId): JsonResponse
    {
        $user = $this->getUser();
        $conversation = $this->getDoctrine()->getRepository(Conversation::class)->find($conversationId);

        // Vérification d'accès
        if (!$conversation || !in_array($user, [$conversation->getUser1(), $conversation->getUser2()])) {
            throw $this->createAccessDeniedException();
        }

        $messages = $this->messageService->getConversationMessages($conversation);

        return $this->json([
            'messages' => $messages,
        ]);
    }

    protected function jsonResponse($data, int $status = 200): JsonResponse
    {
        $response = new JsonResponse($data, $status);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        return $response;
    }
}