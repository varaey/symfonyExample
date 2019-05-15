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

        $faker = Factory::create();

        for ($i = 0; $i <= 10; $i++) {
            $post = new Post(
                $faker->randomNumber(),
                new Category($faker->name),
                $faker->sentence()
            );

            $post
                ->setShortDescription($faker->sentence())
                ->setImage($faker->imageUrl())
                ->setPublicationDate($faker->dateTime())
            ;

            $collection->addPost($post);
        }

        return $collection;
    }

    /**
     * @param int $id
     * Method generate post by id
     *
     * @return object
     */
    public function getPostById(int $id): object
    {
        $faker = Factory::create();

        $post = new Post(
            $id,
            new Category($faker->name),
            $faker->sentence
        );

        $post
            ->setDescription($faker->text(2300))
            ->setImage($faker->imageUrl())
            ->setPublicationDate($faker->dateTime())
        ;

        return $post;
    }
}