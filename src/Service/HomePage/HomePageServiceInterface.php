<?php

namespace App\Service\HomePage;

use App\Collection\PostCollection;

interface HomePageServiceInterface
{
    public function getPosts(): PostCollection;
    public function getPostById(int $id): object;
}