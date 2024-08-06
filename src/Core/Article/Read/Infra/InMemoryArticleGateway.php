<?php declare(strict_types=1);

namespace App\Core\Article\Read\Infra;
use App\Core\Article\Read\Query\ArticleGateway;
use App\Core\Article\Read\Query\ArticleListViewModel;

class InMemoryArticleGateway implements ArticleGateway
{

    public function __construct(
        private array $articles = []
    ) {}

    public function setArticles(array $articles): void
    {
        $this->articles = $articles;
    }


    public function all(): array
    {
        $articleListVewModel = new ArticleListViewModel();
        $articleListVewModel->setArticleList($this->articles);

        return $articleListVewModel();
    }
}
