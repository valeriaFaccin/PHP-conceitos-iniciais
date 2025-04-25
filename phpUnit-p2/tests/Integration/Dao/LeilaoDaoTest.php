<?php

namespace Alura\Leilao\Tests\Integration\Dao;

use Alura\Leilao\Infra\ConnectionCreator;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Dao\Leilao as LeilaoDao;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LeilaoDaoTest extends TestCase
{
    private static \PDO $pdo;

    public static function setUpBeforeClass(): void
    {
        self::$pdo = new \PDO(dsn:'sqlite::memory:');
        self::$pdo->exec(
            statement:"create table main.leiloes
                    (
                        id INTEGER primary key,
                        descricao  TEXT,
                        finalizado BOOL,
                        dataInicio TEXT
                    );"
        );
    }

    protected function setUp(): void
    {
        self::$pdo->beginTransaction();
    }

    #[DataProvider('leiloes')]
    public function testInsertAndSelectLeiloesNaoFinalizados(array $leiloes): void
    {
        //Arrange
        $leilaoDao = new LeilaoDao(self::$pdo);
        foreach ($leiloes as $leilao) {
            $leilaoDao->salva($leilao);
        }

        //Act
        $leiloes = $leilaoDao->recuperarNaoFinalizados();

        //Assert
        static::assertCount(1, $leiloes);
        static::assertContainsOnlyInstancesOf(Leilao::class, $leiloes);
        static::assertSame("Algorithm of Babbage's Analytical Engine", $leiloes[0]->recuperarDescricao());
    }

    #[DataProvider('leiloes')]
    public function testInsertAndSelectLeiloesFinalizados(array $leiloes): void
    {
        //Arrange
        $leilaoDao = new LeilaoDao(self::$pdo);
        foreach ($leiloes as $leilao) {
            $leilaoDao->salva($leilao);
        }

        //Act
        $leiloes = $leilaoDao->recuperarFinalizados();

        //Assert
        static::assertCount(1, $leiloes);
        static::assertContainsOnlyInstancesOf(Leilao::class, $leiloes);
        static::assertSame("Turing Machine", $leiloes[0]->recuperarDescricao());
    }

    public function testAoAtualizarLeilaoStatusDeveSerAlterado(): void
    {
        $leilao = new Leilao('Relational Model Database');
        $leilaoDao = new LeilaoDao(self::$pdo);
        $leilao = $leilaoDao->salva($leilao);

        $leiloes = $leilaoDao->recuperarNaoFinalizados();
        self::assertCount(1, $leiloes);
        self::assertSame('Relational Model Database', $leiloes[0]->recuperarDescricao());
        self::assertFalse($leiloes[0]->estaFinalizado());

        $leilao->finaliza();
        $leilaoDao->atualiza($leilao);

        $leiloes = $leilaoDao->recuperarFinalizados();
        self::assertCount(1, $leiloes);
        self::assertSame('Relational Model Database', $leiloes[0]->recuperarDescricao());
        self::assertTrue($leiloes[0]->estaFinalizado());
    }

    protected function tearDown(): void
    {
        self::$pdo->rollBack();
    }

    public static function leiloes(): array
    {
        $leilaoNaoFinalizado = new Leilao("Algorithm of Babbage's Analytical Engine");
        $leilaoFinalizado = new Leilao("Turing Machine");
        $leilaoFinalizado->finaliza();
        return [
            [
                [$leilaoNaoFinalizado, $leilaoFinalizado]
            ]
        ];
    }
}
