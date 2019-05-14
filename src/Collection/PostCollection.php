<?php


namespace App\Collection;


use App\Model\Post;

class PostCollection implements  \IteratorAggregate
{
    private $posts;

    public function __construct(Post ...$posts)
    {
        $this->posts = $posts;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->posts);
    }
}