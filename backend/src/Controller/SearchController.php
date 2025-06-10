<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SearchController extends AbstractController
{
    #[Route('api/search', name: 'app_search')]
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

    #[Route('api/search/live', name: 'app_search_live', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function searchLive(Request $request, ArticleRepository $articleRepository, CategoryRepository $categoryRepository): JsonResponse
    {
        $query = $request->query->get('q', '');
        $articles = $articleRepository->search($query);
        $categories = $categoryRepository->search($query);
        $articlesData = array_map(fn($article) => [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
        ], $articles);
        $categoriesData = array_map(fn($category) => [
            'id' => $category->getId(),
            'name' => $category->getName(),
        ], $categories);

        return $this->json([
            'query' => $query,
            'articles' => $articlesData,
            'categories' => $categoriesData,
        ]);
    }
}