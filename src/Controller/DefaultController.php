<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        $posts = [
            0 => [
                'category' => [
                    'name' => 'mycat'
                ],
                'title' => 'firts tost',
                'publicationDate' => '12-12-2019'
            ]
        ];
       return $this->render('default/index.html.twig');
    }
}