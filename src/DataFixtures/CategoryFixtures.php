<?php
// src/DataFixtures/CategoryFixtures.php
namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = ['Technologie', 'Voyage', 'Cuisine', 'Sport', 'Musique'];
        
        foreach ($categories as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
        }

        $manager->flush();
    }
}