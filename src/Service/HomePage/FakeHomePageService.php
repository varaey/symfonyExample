<?php


namespace App\Service\HomePage;

use App\Collection\PostCollection;

class FakeHomePageService implements HomePageServiceInterface
{
    public function getPosts(): PostCollection
    {
        $collection = new PostCollection();



    }

}