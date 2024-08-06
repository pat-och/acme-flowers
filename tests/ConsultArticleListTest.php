<?php declare(strict_types=1);

namespace App\Tests;

use App\Core\Article\Read\Infra\InMemoryArticleGateway;
use App\Core\Article\Read\Query\ArticleGateway;
use App\Core\Article\Read\Query\ConsultArticleList;
use PHPUnit\Framework\TestCase;

class ConsultArticleListTest extends TestCase
{
    private ArticleGateway $articleGateway;
    private ConsultArticleList $consultArticleList;

    protected function setUp(): void
    {
        $this->articleGateway = new InMemoryArticleGateway();
        $this->consultArticleList = new ConsultArticleList($this->articleGateway);
    }

    /** @test */
    public function ShouldConsultEmptyArticleList() {
        $this->assertEmpty($this->consultArticleList->handle());
    }

    /** @test */
    public function ShouldConsultOneArticleList() {

        $this->articleGateway->setArticles(
            [
                [
                    'id' => 'abc',
                    'title' => 'article 1',
                    'publishedAt' => '2024-01-01',
                ]
            ]
        );

        $this->assertEquals(
            [
                [
                    'id' => 'abc',
                    'title' => 'article 1',
                    'publishedAt' => '2024-01-01',
                ]
            ],
            $this->consultArticleList->handle()
        );
    }
}
