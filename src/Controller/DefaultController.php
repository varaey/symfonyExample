<?php

namespace App\Controller;

use App\Service\HomePage\FakeHomePageService;
use App\Service\HomePage\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(HomePageServiceInterface $homePageService): Response
    {
        $posts = $homePageService->getPosts();

        return $this->render('default/index.html.twig', [
           'posts' => $posts,
        ]);
    }

    /**
     * @param int $id
     * Method output generated post.
     *
     * @return Response
     */
    public function showPost(int $id): Response
    {
        $homePageService = new FakeHomePageService();
        $post = $homePageService->getPostById($id);

        return $this->render('default/showPost.html.twig', [
            'post' => $post,
        ]);
    }
}
