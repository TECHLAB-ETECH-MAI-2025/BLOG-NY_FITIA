<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class VoteController extends AbstractController
{
    #[Route('/vote', name: 'app_vote')]
    public function index(): Response
    {
        return $this->render('vote/index.html.twig', [
            'controller_name' => 'VoteController',
        ]);
    }

    #[Route('/article/{id}/vote/{type}', name: 'article_vote', methods: ['POST'])]
    public function vote(
        Article $article,
        string $type,
        EntityManagerInterface $em,
        Request $request
    ): JsonResponse {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $value = ($type === 'like') ? 1 : -1;

        // Trouver le vote existant
        $existingVote = $em->getRepository(Vote::class)->findExistingVote($user, $article);

        // Logique de vote
        if ($existingVote) {
            if ($existingVote->getValue() === $value) {
                $em->remove($existingVote); // Annule le vote existant
                $message = 'Vote retiré';
            } else {
                $existingVote->setValue($value); // Change de like à dislike ou inversement
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
