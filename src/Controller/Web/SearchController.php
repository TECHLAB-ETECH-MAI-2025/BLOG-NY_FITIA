<?php

namespace App\Controller\Web;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function search( Request $request, ArticleRepository $articleRepository, CategoryRepository $categoryRepository): Response
    {
        $query = $request->query->get('q', '');

        $articles = $articleRepository->search($query);
        $categories = $categoryRepository->search($query);

        return $this->render('search/index.html.twig', [
            'query' => $query,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }

    #[Route('/search/live', name: 'app_search_live')]
    public function searchLive(Request $request, ArticleRepository $articleRepository, CategoryRepository $categoryRepository): Response
    {
        $query = $request->query->get('q', '');

        $articles = $articleRepository->search($query);
        $categories = $categoryRepository->search($query);

        return $this->render('search/_resultat.html.twig', [
            'query' => $query,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }

}