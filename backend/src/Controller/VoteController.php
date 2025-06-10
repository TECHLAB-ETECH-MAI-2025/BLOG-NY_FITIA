<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Vote;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class VoteController extends AbstractController
{
    #[Route('/api/article/{id}/vote/{type}', name: 'article_vote', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function vote(Article $article, string $type, EntityManagerInterface $em, Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            error_log('User not authenticated in controller');
            return $this->json(['status' => 'error', 'message' => 'Authentication required'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $value = $data['newVote'] ?? (($type === 'like') ? 1 : -1);
        $voteRepository = $em->getRepository(Vote::class);
        $existingVote = $voteRepository->findOneBy([
            'user' => $user,
            'article' => $article
        ]);
        if ($existingVote) {
            if ($value === 0) {
                $em->remove($existingVote);
                $message = 'Vote retiré';
            } 
            elseif ($existingVote->getValue() !== $value) {
                $existingVote->setValue($value);
                $message = 'Vote modifié';
            } 
            else {
                $em->remove($existingVote);
                $message = 'Vote retiré';
            }
        }
        else {
            if ($value !== 0) {
                $vote = new Vote();
                $vote->setUser($user)
                    ->setArticle($article)
                    ->setValue($value);
                $em->persist($vote);
                $message = 'Vote enregistré';
            } else {
                $message = 'Aucun vote effectué';
            }
        }
        $em->flush();
        return $this->json([
            'status' => 'success',
            'message' => $message,
            'likes' => $article->countLikes(),
            'dislikes' => $article->countDislikes(),
            'userVote' => $article->getUserVote($user)
        ]);
    }

}