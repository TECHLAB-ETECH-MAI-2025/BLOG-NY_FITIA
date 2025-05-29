<?php

namespace App\Controller\Api;

use App\Entity\User;
use App\Service\ConversationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/api/conversations')]
class ConversationController extends AbstractController
{ 
    public function __construct(private ConversationService $conversationService)
    {
    }

    #[Route('/', name: 'app_conversation_list', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function listConversation(): JsonResponse
    {
        $user = $this->getUser();
        $conversations = $this->conversationService->getUserConversations($user);
        
        return $this->json([
            'conversations' => $conversations,
        ]);
    }

    #[Route('/with/{userId}', name: 'app_conversation_start', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function start(int $userId, Request $request): JsonResponse
    {
        $currentUser = $this->getUser();
        $otherUser = $this->getDoctrine()->getRepository(User::class)->find($userId);

        if (!$otherUser) {
            throw $this->createNotFoundException('Utilisateur non trouvé !');
        }
        
        $conversation = $this->conversationService->getOrCreateConversation($currentUser, $otherUser);

        return $this->json([
            'conversationId' => $conversation->getId(),
        ], 201);
    }

    protected function jsonResponse($data, int $status = 200): JsonResponse
    {
        $response = new JsonResponse($data, $status);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        return $response;
    }
}