<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryForm;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

final class CategoryController extends AbstractController
{
    #[Route('/category/new', name: 'category_create', methods: ['POST'])]
    public function New(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['name'])) {
            return new JsonResponse(['error' => 'Le nom est requis'], Response::HTTP_BAD_REQUEST);
        }
        $category = new Category();
        $category->setName($data['name']);
        $entityManager->persist($category);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Catégorie créée avec succès'], Response::HTTP_CREATED);
    }

    #[Route('/category' , name: 'category_show', methods: ['GET'])]
    public function show(CategoryRepository $categoryRepository): JsonResponse
    {
        $categories = $categoryRepository->findAll();
        $arrayCategory = [];
        foreach ($categories as $category)
        {
            $arrayCategory[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
            ];
        }
        return new JsonResponse($arrayCategory);
    }

    #[Route('/category/{id}', name: 'category_show_one', methods: ['GET'])]
    public function showCategory(int $id, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);
        if (!$category)
        {
            return new JsonResponse(['error' => "Catogory non trouve"], JsonResponse::HTTP_NOT_FOUND);
        }
        $categoryData = [
            'id' => $category->getId(),
            'Name' => $category->getName()
        ];
        return new JsonResponse($categoryData);
    }

    #[Route('/category/{id}', name: 'category_update', methods: ['PUT'])]
    public function update(Request $request, Category $category, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['name'])) {
            return new JsonResponse(['error' => 'Name is required'], 400);
        }
        $category->setName($data['name']);
        $em->flush();

        return new JsonResponse(['status' => 'Category updated'], 200);
    }

    #[Route('/category/{id}', name: 'category_delete', methods: ['DELETE'])]
    public function delete(Category $category, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($category);
        $em->flush();
        return new JsonResponse(['status' => 'Category deleted'], 200);
    }

}
