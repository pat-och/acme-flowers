<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'app_article')]
    public function index(string $id): Response
    {

        $articles = [
            [
                'id' => 'abc',
                'source' => 'src-1',
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet 1',
                'publishedAt' => '2024-08-' . rand(26, 31)
            ],
            [
                'id' => 'def',
                'source' => 'src-2',
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet 2',
                'publishedAt' => '2024-08-' . rand(20, 25)
            ],
            [
                'id' => 'ghi',
                'source' => 'src-2',
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet 3',
                'publishedAt' => '2024-08-' . rand(10, 19)
            ],
            [
                'id' => 'jkl',
                'source' => 'src-1',
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet 4',
                'publishedAt' => '2024-08-' . rand(1, 9)
            ]
        ];

        foreach ($articles as $article) {
            if ($article['id'] !== $id) continue;
            break;
        }

        return $this->render('article/article.html.twig', [
            'article' => $article,
        ]);
    }
}
