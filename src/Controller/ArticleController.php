<?php
	// src/Controller/ArticleController.php

	namespace App\Controller;

	use App\Entity\Article;
	use App\Entity\Comment;
	use App\Form\CommentType;
	use Doctrine\ORM\EntityManagerInterface;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class ArticleController extends AbstractController
	{
		/**
		 * Affiche un article et gère l'ajout de commentaires
		 *
		 * @Route("/article/{id}", name="app_article_show", methods={"GET", "POST"})
		 */
		public function show(Article $article, Request $request, EntityManagerInterface $entityManager): Response
		{
			// Création d'un nouveau commentaire
			$comment = new Comment();
			$comment->setArticle($article);

			// Création du formulaire
			$form = $this->createForm(CommentType::class, $comment);
			$form->handleRequest($request);

			// Traitement du formulaire
			if ($form->isSubmitted() && $form->isValid()) {
				$comment->setCreatedAt(new \DateTimeImmutable());

				// Enregistrement du commentaire
				$entityManager->persist($comment);
				$entityManager->flush();

				// Message de succès
				$this->addFlash('success', 'Votre commentaire a été publié avec succès !');

				// Redirection pour éviter le rechargement du formulaire
				return $this->redirectToRoute(
					'app_article_show',
					['id' => $article->getId()],
					Response::HTTP_SEE_OTHER
				);
			}

			// Affichage de la vue
			return $this->render('article/show.html.twig', [
				'article' => $article,
				'commentForm' => $form->createView(),
			]);
		}
	}