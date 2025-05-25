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
    #[Route('/article/{id}/vote/{type}', name: 'article_vote', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function vote(
        Article $article,
        string $type,
        EntityManagerInterface $em,
        Request $request
    ): JsonResponse {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->json([
                'status' => 'error',
                'message' => 'Authentication required'
            ], 401);
        }

        $value = ($type === 'like') ? 1 : -1;
        $voteRepository = $em->getRepository(Vote::class);

        $existingVote = $voteRepository->findOneBy([
            'user' => $user,
            'article' => $article
        ]);

        if ($existingVote) {
            if ($existingVote->getValue() === $value) {
                $em->remove($existingVote);
                $message = 'Vote retiré';
            } else {
                $existingVote->setValue($value);
                $message = 'Vote modifié';
            }
        } else {
            $vote = new Vote();
            $vote->setUser($user)
                 ->setArticle($article)
                 ->setValue($value);
            $em->persist($vote);
            $message = 'Vote enregistré';
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