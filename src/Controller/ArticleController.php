<?php
// src/Controller/ArticleController.php
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
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/new', name: 'article_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($article);
            $entityManager->flush();
            
            return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
        }
        
        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/{id}', name: 'article_show')]
    public function show(Article $article, Request $request, EntityManagerInterface $entityManager): Response
    {
        $comment = new Comment();
        $comment->setArticle($article);
        
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();
            
            return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
        }
        
        return $this->render('article/show.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
}