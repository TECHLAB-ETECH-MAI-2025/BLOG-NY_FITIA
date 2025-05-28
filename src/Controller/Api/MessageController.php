<?php

namespace App\Controller;

use App\Repository\ConversationRepository;
use App\Service\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/messages')]
class MessageController extends AbstractController
{
    public function __construct(
        private MessageService $messageService
    ) {}

    #[Route('/send/{conversationId}', name: 'app_message_send', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function send(
        int $conversationId,
        Request $request,
        ConversationRepository $conversationRepository,
        ValidatorInterface $validator
    ): JsonResponse 
    {
        $user = $this->getUser();
        $data = json_decode($request->getContent(), true);

        if (!isset($data['content']) || empty(trim($data['content']))) {
            return $this->json([
                'error' => 'Content is required',
                'code' => 'invalid_input'
            ], 400);
        }

        $conversation = $conversationRepository->find($conversationId);
        if (!$conversation) {
            return $this->json([
                'error' => 'Conversation not found',
                'code' => 'conversation_not_found'
            ], 404);
        }

        if (!$conversation->hasUser($user)) {
            return $this->json([
                'error' => 'Access denied',
                'code' => 'access_denied'
            ], 403);
        }

        try {
            $message = $this->messageService->sendMessage(
                $conversation,
                $user,
                trim($data['content'])
            );

            $errors = $validator->validate($message);
            if (count($errors) > 0) {
                return $this->json([
                    'error' => 'Validation failed',
                    'details' => (string) $errors,
                    'code' => 'validation_error'
                ], 422);
            }

            return $this->json([
                'data' => [
                    'messageId' => $message->getId(),
                    'content' => $message->getContent(),
                    'sentAt' => $message->getSentAt()->format(\DateTimeInterface::ATOM)
                ],
                'meta' => [
                    'conversationId' => $conversation->getId(),
                    'participants' => [
                        $conversation->getUser1()->getId(),
                        $conversation->getUser2()->getId()
                    ]
                ]
            ], 201);

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Message sending failed',
                'details' => $e->getMessage(),
                'code' => 'message_send_error'
            ], 500);
        }
    }

    #[Route('/history/{conversationId}', name: 'app_message_history', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function history(
        int $conversationId,
        Request $request,
        ConversationRepository $conversationRepository,
        SerializerInterface $serializer
    ): JsonResponse
    {
        $user = $this->getUser();

        // IMPORTANT : méthode personnalisée à créer dans ConversationRepository
        $conversation = $conversationRepository->findWithParticipants($conversationId);

        if (!$conversation) {
            return $this->json([
                'error' => 'Conversation not found',
                'code' => 'conversation_not_found'
            ], 404);
        }

        if (!$conversation->hasUser($user)) {
            return $this->json([
                'error' => 'Access denied',
                'code' => 'access_denied'
            ], 403);
        }

        try {
            $page = $request->query->getInt('page', 1);
            $messages = $this->messageService->getPaginatedMessages($conversation, $page);

            return $this->json([
                'data' => $serializer->normalize($messages->getItems(), null, [
                    'groups' => ['message:read']
                ]),
                'meta' => [
                    'currentPage' => $messages->getCurrentPage(),
                    'totalItems' => $messages->getTotalItemCount(),
                    'itemsPerPage' => $messages->getItemNumberPerPage()
                ]
            ]);

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to load messages',
                'details' => $e->getMessage(),
                'code' => 'load_messages_error'
            ], 500);
        }
    }
}
