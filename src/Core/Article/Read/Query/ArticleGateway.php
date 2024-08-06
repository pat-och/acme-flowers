<?php declare(strict_types=1);

namespace App\Core\Article\Read\Query;
interface ArticleGateway
{
    public function all(): array;
}
