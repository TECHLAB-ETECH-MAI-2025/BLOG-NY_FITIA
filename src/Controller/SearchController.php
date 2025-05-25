<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function search(
        Request $request,
        ArticleRepository $articleRepository,
        CategoryRepository $categoryRepository
    ): Response {
        $query = $request->query->get('q', '');

        // Recherche dans les articles et catégories
        $articles = $articleRepository->search($query);
        $categories = $categoryRepository->search($query);

        return $this->render('search/index.html.twig', [
            'query' => $query,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}