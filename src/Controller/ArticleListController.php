<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleListController extends AbstractController
{
    #[Route('/article/list', name: 'app_article_list')]
    public function index(): Response
    {
        return $this->render('article_list/index.html.twig', [
            'controller_name' => 'ArticleListController',
        ]);
    }
}
