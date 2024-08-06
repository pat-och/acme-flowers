<?php declare(strict_types=1);

namespace App\Core\Article\Read\Query;

class ConsultArticleList {

    public function __construct(
        private ArticleGateway $articleGateway,
    ) {}

    public function handle(): array
    {
        return $this->articleGateway->all();
    }
}
