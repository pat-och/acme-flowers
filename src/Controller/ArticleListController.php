<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleListController extends AbstractController
{
    #[Route('/articles', name: 'app_article_list')]
    public function index(): Response
    {
        return $this->render('article/list.html.twig', [
            'articles' => [
                [
                    'id' => 'abc',
                    'source' => 'src-1',
                    'title' => 'Article 1',
                    'publishedAt' => '2024-08-28',
                ],
                [
                    'id' => 'def',
                    'source' => 'src-2',
                    'title' => 'Article 2',
                    'publishedAt' => '2024-08-21',
                ],
                [
                    'id' => 'ghi',
                    'source' => 'src-2',
                    'title' => 'Article 3',
                    'publishedAt' => '2024-08-15',
                ],
                [
                    'id' => 'jkl',
                    'source' => 'src-1',
                    'title' => 'Article 4',
                    'publishedAt' => '2024-08-02',
                ]
            ],
        ]);
    }
}
