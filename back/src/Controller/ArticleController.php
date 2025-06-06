<?php
namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

class ArticleController extends AbstractController
{
    #[Route('/article/new', name: 'article_create', methods: ['POST'])]
    public function New(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['title']) || !isset($data['description'])) {
            return new JsonResponse(['error' => 'Champs requis manquants'], Response::HTTP_BAD_REQUEST);
        }
        $article = new Article();
        $article->setTitle($data['title']);
        $article->setDescription($data['description']);
        $entityManager->persist($article);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Article créé avec succès'], Response::HTTP_CREATED);
    }

    #[Route('/article/{id}', name: 'article_update', methods: ['PUT'])]
    public function update(Request $request, Article $article, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return $this->json(['error' => 'Invalid JSON'], 400);
        }
        if (isset($data['title'])) {
            $article->setTitle($data['title']);
        }
        if (isset($data['description'])) {
            $article->setDescription($data['description']);
        }
        $entityManager->flush();

        return $this->json([
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
        ]);
    }

    #[Route('/article/{id}', name: 'article_delete', methods: ['DELETE'])]
    public function delete(Article $article, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($article);
        $em->flush();
        return new JsonResponse(['status' => 'Article deleted'], 200);
    }

    #[Route('/home', name: 'home', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): JsonResponse
    {
        $articles = $articleRepository->findBy([], ['createdAt' => 'DESC']);
        $arrayArticle = [];
        
        foreach ($articles as $article)
        {
            $arrayArticle[] = [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'description' => $article->getDescription(),
                'createdAt' => $article->getCreatedAt()->format('H:i:s')
            ];
        }
        return new JsonResponse($arrayArticle);
    }
    
    #[Route('/article', name: 'article_show',  methods: ['GET'])]
    public function show(ArticleRepository $articleRepository): JsonResponse
    {
        $articles = $articleRepository->findBy([], ['createdAt' => 'DESC']);
        $arrayArticle = [];

        foreach ($articles as $article)
        {
            $arrayArticle[] = [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'description' => $article->getDescription(),
                'createdAt' => $article->getCreatedAt()->format('H:i:s')
            ];
        }
        return new JsonResponse($arrayArticle);
    }

    #[Route('/article/{id}', name: 'article_show_one', methods: ['GET'])]
    public function showArticleOne(int $id, ArticleRepository $articleRepository) : JsonResponse
    {
        $article = $articleRepository->find($id);
        if (!$article)
        {
            return new JsonResponse(['error' => 'Article non trouve'], JsonResponse::HTTP_NOT_FOUND);
        }
        $ArticleData = [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
            'createdAt' => $article->getCreatedAt()->format('H:i:s')
        ];
        return new JsonResponse($ArticleData);
    }


    #[Route('/article/{id}/interact', name: 'article_interact', methods: ['GET', 'POST'])]
    public function interact(Article $article, Request $request, EntityManagerInterface $entityManager): Response
    {
        $comment = new Comment();
        $comment->setArticle($article);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('article_interact', ['id' => $article->getId()]);
        }

        return $this->render('article/interact.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView(),
        ]);
    }

    #[Route('/search', name: 'app_search', methods: ['GET'])]
    public function search(Request $request, ArticleRepository $articleRepository): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        $results = [];
        
        if ($form->isSubmitted() && $form->isValid()) {
            $query = $form->get('query')->getData();
            $results = $articleRepository->search($query);
        }

        return $this->render('article/search.html.twig', [
            'searchForm' => $form->createView(),
            'results' => $results,
            'query' => $query ?? null
        ]);
    }
}