<?php


namespace App\Service\HomePage;

use App\Collection\PostCollection;
use App\Model\Category;
use App\Model\Post;
use Faker\Factory;

class FakeHomePageService implements HomePageServiceInterface
{
    public function getPosts(): PostCollection
    {
        $collection = new PostCollection();

        $faker = new Factory::create();

        for ($i = 0; $i <= 10; $i++) {
            $post = new Post(
                $faker->randomNumber(),
                new Category($faker->words),
                $faker->words
            );

            $post
                ->setShortDescription($faker->imageUrl())
                ->setImage($faker->sentance())
                ->setPublicationDate($faker->dateTime())
            ;

            $collection->addPost($post);
        }

        return $collection;
    }

}