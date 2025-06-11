<?php
namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
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
    public function New(Request $request, EntityManagerInterface $entityManager, CategoryRepository $catRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['title']) || !isset($data['description'])) {
            return new JsonResponse(['error' => 'Champs requis manquants'], Response::HTTP_BAD_REQUEST);
        }
        $article = new Article();
        $article->setTitle($data['title']);
        $article->setDescription($data['description']);
        $category = $catRepo->find($data['category_id']);
        if (!$category) {
            return new JsonResponse(['error' => 'Catégorie non trouvée'], 404);
        }
        $article->setCategory($category);
        $entityManager->persist($article);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Article créé avec succès'], Response::HTTP_CREATED);
    }

    #[Route('/article/{id}', name: 'article_update', methods: ['PUT'])]
    public function update(Request $request, Article $article, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository): JsonResponse
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
        if (array_key_exists('categoryId', $data)) {
            if ($data['categoryId'] === null) {
                $article->setCategory(null);
            } else {
                $category = $categoryRepository->find($data['categoryId']);
                if (!$category) {
                    return $this->json(['error' => 'Catégorie introuvable'], 404);
                }
                $article->setCategory($category);
            }
        }
        $entityManager->flush();
        return $this->json([
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
            'category' => $article->getCategory() ? [
                'id' => $article->getCategory()->getId(),
                'name' => $article->getCategory()->getName()
            ] : null
        ]);
    }

    #[Route('/article/{id}', name: 'article_delete', methods: ['DELETE'])]
    public function delete(Article $article, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($article);
        $em->flush();
        return new JsonResponse(['status' => 'Article deleted'], 200);
    }

    #[Route('/home', name: 'home',  methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, Request $request, PaginatorInterface $paginator): JsonResponse
    {
        $user = $this->getUser();
        $page = max(1, (int) $request->query->get('page', 1));
        $limit = max(1, (int) $request->query->get('limit', 5));

        $query = $articleRepository->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery();
        $pagination = $paginator->paginate($query, $page, $limit);

        $arrayArticle = [];
        foreach ($pagination->getItems() as $article) {
            $category = $article->getCategory();
            $categoryData = $category ? [
                'id' => $category->getId(),
                'name' => $category->getName()
            ] : null;

            $likes = 0;
            $dislikes = 0;
            $userVote = 0;
            foreach ($article->getVotes() as $vote) {
                $vote->getValue() === 1 ? $likes++ : $dislikes++;
                if ($user && $vote->getUser() === $user) {
                    $userVote = $vote->getValue() ? 1 : -1;
                }
            }
            $arrayArticle[] = [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'description' => $article->getDescription(),
                'createdAt' => $article->getCreatedAt()->format('H:i:s'),
                'category' => $categoryData,
                'likes' => $likes,
                'dislikes' => $dislikes,
                'userVote' => $userVote,
            ];
        }
        return $this->json([
            'items' => $arrayArticle,
            'currentPage' => $page,
            'totalPages' => ceil($pagination->getTotalItemCount() / $limit),
            'totalItems' => $pagination->getTotalItemCount(),
        ]);
    }
    
    #[Route('/article', name: 'article_show',  methods: ['GET'])]
    public function show(ArticleRepository $articleRepository, Request $request, PaginatorInterface $paginator): JsonResponse
    {
        $page = max(1, (int) $request->query->get('page', 1)); // page=1 par défaut
        $limit = max(1, (int) $request->query->get('limit', 6)); // 6 articles par page par défaut
        $offset = ($page - 1) * $limit;

        $totalArticles = $articleRepository->count([]);
        $articles = $articleRepository->findBy([], ['createdAt' => 'DESC'], $limit, $offset);

        $arrayArticle = [];
        foreach ($articles as $article) {
            $category = $article->getCategory();
            $categoryData = null;
            if ($category) {
                try {
                    $categoryData = [
                        'id' => $category->getId(),
                        'name' => $category->getName()
                    ];
                } catch (\Throwable $e) {
                    $categoryData = null;
                }
            }

            $arrayArticle[] = [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'description' => $article->getDescription(),
                'createdAt' => $article->getCreatedAt()->format('H:i:s'),
                'category' => $categoryData
            ];
        }

        return new JsonResponse([
            'currentPage' => $page,
            'limit' => $limit,
            'total' => $totalArticles,
            'articles' => $arrayArticle
        ]);
    }

    #[Route('/api/article/{id}', name: 'api_article_show', methods: ['GET'])]
    public function showOne( Article $article ): JsonResponse 
    {
        $data = [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
            'createdAt' => $article->getCreatedAt()->format('Y-m-d H:i:s'),
            'category' => $article->getCategory()?->getName(),
            'comments' => array_map(fn($comment) => [
                'id' => $comment->getId(),
                'content' => $comment->getContent(),
                'createdAt' => $comment->getCreatedAt()->format('Y-m-d H:i'),
            ], $article->getComments()->toArray())
        ];
        return new JsonResponse($data, JsonResponse::HTTP_OK);
    }

    #[Route('/api/article/{id}/comment', name: 'api_article_comment', methods: ['POST'])]
    public function comment( Article $article, Request $request, EntityManagerInterface $entityManager): JsonResponse 
    {
        $data = json_decode($request->getContent(), true);
        if (empty($data['content'])) {
            return new JsonResponse(['error' => 'Le contenu du commentaire est requis'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $comment = new Comment();
        $comment->setArticle($article);
        $comment->setContent($data['content']);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager->persist($comment);
        $entityManager->flush();

        return new JsonResponse([
            'id' => $comment->getId(),
            'content' => $comment->getContent(),
            'createdAt' => $comment->getCreatedAt()->format('Y-m-d H:i'),
        ], JsonResponse::HTTP_CREATED);
    }

    #[Route('/search', name: 'app_search', methods: ['GET'])]
    public function search(Request $request, ArticleRepository $articleRepository): JsonResponse
    {
        $query = $request->query->get('query', '');

        $results = [];
        if ($query) {
            $results = $articleRepository->search($query);
        }

        return new JsonResponse([
            'query' => $query,
            'results' => $results,
        ]);
    }
}