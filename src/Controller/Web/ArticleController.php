<?php
// src/Controller/ArticleController.php
namespace App\Controller\Web;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/api')]
class ArticleController extends AbstractController
{
    #[Route('/article/new', name: 'article_new')]
    public function new(ArticleRepository $articleRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        
        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/{id}/edit', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        try {
            $categoryExists = ($article->getCategory() !== null && $article->getCategory()->getId() !== null);
        } catch (\Doctrine\ORM\EntityNotFoundException $e) {
            $categoryExists = false;
            $article->setCategory(null); // Nettoie la référence
            $entityManager->persist($article);
            $entityManager->flush();
        }

        $form = $this->createForm(ArticleType::class, $article, [
            'empty_category' => $categoryExists ? null : '-- Catégorie supprimée --'
        ]);

        if (!$categoryExists) {
            $form->get('category')->setData(null); // Réinitialise le champ
        }
    
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/article/{id}', name: 'article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {

        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }
        return $this->redirectToRoute('article_show', ['id' => $article->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/home', name: 'home')]
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $articleRepository->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery();

        $articles = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
    
    #[Route('/article', name: 'article_show',  methods: ['GET'])]
    public function show(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $articleRepository->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery();

        $articles = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('article/show.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article/{id}', name: 'article_show_one', methods: ['GET'])]
    public function showArticleOne(int $id, ArticleRepository $articleRepository) : Response
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Article non trouve');
        }

        return $this->render('article/showOne.html.twig', [
            'article' => $article,
        ]);
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