<?php

// src/EventSubscriber/CategoryListener.php

namespace App\EventSubscriber;

use App\Entity\Article;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;

class CategoryListener implements EventSubscriberInterface
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::postLoad,
            Events::postRemove
        ];
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Article) {
            try {
                $entity->getCategory()?->getId();
            } catch (\Exception $e) {
                $entity->setCategory(null);
                $args->getEntityManager()->flush();
            }
        }
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $entity = $args->getEntity();
        
        if ($entity instanceof Category) {
            $this->updateRelatedArticles($entity, $args);
        }
    }

    private function cleanDeadCategory(Article $article, LifecycleEventArgs $args): void
    {
        try {
            // Tente d'accéder à la catégorie pour déclencher une éventuelle exception
            $article->getCategory()?->getId();
        } catch (\Doctrine\ORM\EntityNotFoundException $e) {
            $em = $args->getEntityManager();
            $meta = $em->getClassMetadata(Article::class);
            $meta->setFieldValue($article, 'category', null);
            
            // Optionnel : mettre à jour en base si nécessaire
            // $em->persist($article);
            // $em->flush();
        }
    }

    private function updateRelatedArticles(Category $category, LifecycleEventArgs $args): void
    {
        $em = $args->getEntityManager();
        $articles = $em->getRepository(Article::class)
            ->findBy(['category' => $category]);
        
        foreach ($articles as $article) {
            $article->setCategory(null);
        }
        
        $em->flush();
    }
}