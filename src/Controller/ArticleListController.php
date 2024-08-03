<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleListController extends AbstractController
{
    #[Route('/article/list', name: 'app_article_list')]
    public function index(): Response
    {
        return $this->render('article/list.html.twig', [
            'articles' => [
                [
                    'id' => 1,
                    'source' => 'src-1',
                    'title' => 'Article 1',
                    'content' => 'Lorem ipsum dolor sit amet 1',
                    'publishedAt' => '2024-08-' . rand(26, 31)
                ],
                [
                    'id' => 2,
                    'source' => 'src-2',
                    'title' => 'Article 2',
                    'content' => 'Lorem ipsum dolor sit amet 2',
                    'publishedAt' => '2024-08-' . rand(20, 25)
                ],
                [
                    'id' => 3,
                    'source' => 'src-2',
                    'title' => 'Article 3',
                    'content' => 'Lorem ipsum dolor sit amet 3',
                    'publishedAt' => '2024-08-' . rand(10, 19)
                ],
                [
                    'id' => 4,
                    'source' => 'src-1',
                    'title' => 'Article 4',
                    'content' => 'Lorem ipsum dolor sit amet 4',
                    'publishedAt' => '2024-08-' . rand(1, 9)
                ]
            ],
        ]);
    }
}
