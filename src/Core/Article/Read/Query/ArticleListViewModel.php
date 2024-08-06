<?php declare(strict_types=1);

namespace App\Core\Article\Read\Query;
class ArticleListViewModel
{
    public function __construct(
        private array $articles = [],
    ) {}

    public function __invoke(): array
    {
        return $this->articles;
    }

    public function setArticleList(array $articles): void
    {
        $this->articles = $articles;
    }
}
