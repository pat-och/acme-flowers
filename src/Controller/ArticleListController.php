<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Uid\Uuid;

class ArticleListController extends AbstractController
{
    #[Route('/articles', name: 'app_article_list')]
    public function index(): Response
    {

        $articles = $this->getArticleList();

        return $this->render('article/list.html.twig', [
            'articles' => $articles
        ]);
    }

    private function getArticleList(): array
    {
        $articles = [];

        for ($i = 1; $i <= 57; $i++) {
            $articles[] = [
                'id' => Uuid::v4(),
                'source' => 'src-' . rand(1, 2),
                'title' => 'Article ' . $i,
                'publishedAt' => '2024-0' . rand(1, 9) . '-' . rand(10, 30),
            ];
        }
        return $articles;
    }
}
