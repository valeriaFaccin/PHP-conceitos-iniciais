<?php

namespace Alura\Leilao\Test\Service;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private Avaliador $leiloeiro;

    protected function setUp(): void
    {
        $this->leiloeiro = new Avaliador();
    }

    #[DataProvider('leilaoOrdemAleatoria')]
    #[DataProvider('leilaoOrdemCrescente')]
    #[DataProvider('leilaoOrdemDecrescente')]
    public function testAvaliadorEncontraMaiorValor(Leilao $novoLeilao): void
    {
        //based in current age (2024)
        //Act - When
        $this->leiloeiro->avalia($novoLeilao);

        //Assert - Then
        $maiorValor = $this->leiloeiro->getMaiorValor();

        static::assertEquals(209, $maiorValor);
    }

    #[DataProvider('leilaoOrdemAleatoria')]
    #[DataProvider('leilaoOrdemCrescente')]
    #[DataProvider('leilaoOrdemDecrescente')]
    public function testAvaliadorEncontraMenorValor(Leilao $novoLeilao): void
    {
        //based on current age (2024)
        //Act - When
        $this->leiloeiro->avalia($novoLeilao);

        //Assert - Then
        $menorValor = $this->leiloeiro->getMenorValor();

        static::assertEquals(101, $menorValor);
    }

    #[DataProvider('leilaoOrdemAleatoria')]
    #[DataProvider('leilaoOrdemCrescente')]
    #[DataProvider('leilaoOrdemDecrescente')]
    public function testAvaliadorRetornaMaioresLances(Leilao $novoLeilao): void
    {
        //based on age of death
        //Arrange - Given
//        $novoLeilao = new Leilao('Relational Model Algebra and Database');
//
//        $user1 = new Usuario('Ada Lovelace'); // age of death: 36, current age if vampire: 209
//        $user2 = new Usuario('Alan Turing'); // age of death: 41, current age if vampire: 112
//        $user3 = new Usuario('Edgar Codd'); // age of death: 79, current age if vampire: 101
//        $user4 = new Usuario('John Von Neumann'); // age of death: 53, current age if vampire: 121
//
//        $novoLeilao->recebeLance(new Lance($user2, 41));
//        $novoLeilao->recebeLance(new Lance($user1, 36));
//        $novoLeilao->recebeLance(new Lance($user3, 79));
//        $novoLeilao->recebeLance(new Lance($user4, 53));
//
//        $leiloeiro = new Avaliador();

        //Act - When
        $this->leiloeiro->avalia($novoLeilao);

        //Assert - Then
        $maioresLances = $this->leiloeiro->getMaioresLances();

        static::assertCount(3, $maioresLances);
        static::assertEquals(209, $maioresLances[0]->getValor());
        static::assertEquals(121, $maioresLances[1]->getValor());
        static::assertEquals(112, $maioresLances[2]->getValor());
    }

    public function testLeilaoVazio(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Não é possível avaliar leilão vazio');

        $leilao = new Leilao('Turing Machine');
        $this->leiloeiro->avalia($leilao);
    }

    public function testLeilaoFinalizadoNaoPodeSerAvaliado(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Leilão está finalizado');

        $leilao = new Leilao("Algorithm of Babbage's Analytical Engine");
        $user1 = new Usuario('Ada Lovelace');

        $leilao->recebeLance(new Lance($user1, 209));
        $leilao->finalizarLeilao();

        $this->leiloeiro->avalia($leilao);
    }


    /** ** ** ** ** ** ** ** ** ** DADOS ** ** ** ** ** ** ** ** ** **/
    public static function leilaoOrdemAleatoria(): array
    {
        $novoLeilao = new Leilao("Relational Model Algebra and Database");

        $user1 = new Usuario('Ada Lovelace'); //36 years old when she died
        $user2 = new Usuario('Alan Turing'); //41 years old when he died
        $user3 = new Usuario('Edgar Codd'); //79 years old when he died
        $user4 = new Usuario('John Von Neumann'); //53 years old when he died

        $novoLeilao->recebeLance(new Lance($user2, 112));
        $novoLeilao->recebeLance(new Lance($user3, 101));
        $novoLeilao->recebeLance(new Lance($user1, 209));
        $novoLeilao->recebeLance(new Lance($user4, 121));

        return [
           'ordem-aleatoria' => [$novoLeilao]
        ];
    }

    public static function leilaoOrdemCrescente(): array
    {
        $novoLeilao = new Leilao("Algorithm of Babbage's Analytical Engine");

        $user1 = new Usuario('Ada Lovelace'); //36 years old when she died
        $user2 = new Usuario('Alan Turing'); //41 years old when he died
        $user3 = new Usuario('Edgar Codd'); //79 years old when he died
        $user4 = new Usuario('John Von Neumann'); //53 years old when he died

        $novoLeilao->recebeLance(new Lance($user1, 209));
        $novoLeilao->recebeLance(new Lance($user4, 121));
        $novoLeilao->recebeLance(new Lance($user2, 112));
        $novoLeilao->recebeLance(new Lance($user3, 101));

        return [
           'ordem-crescente' => [$novoLeilao]
        ];
    }

    public static function leilaoOrdemDecrescente(): array
    {
        $novoLeilao = new Leilao("Turing Machine");

        $user1 = new Usuario('Ada Lovelace'); //36 years old when she died
        $user2 = new Usuario('Alan Turing'); //41 years old when he died
        $user3 = new Usuario('Edgar Codd'); //79 years old when he died
        $user4 = new Usuario('John Von Neumann'); //53 years old when he died

        $novoLeilao->recebeLance(new Lance($user3, 101));
        $novoLeilao->recebeLance(new Lance($user2, 112));
        $novoLeilao->recebeLance(new Lance($user4, 121));
        $novoLeilao->recebeLance(new Lance($user1, 209));

        return [
           'ordem-decrescente' => [$novoLeilao]
        ];
    }
}
