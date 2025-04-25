<?php

namespace Alura\Leilao\Tests\Unit\Service;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private Avaliador $avaliador;

    protected function setUp(): void
    {
        $this->avaliador = new Avaliador();
    }

    #[DataProvider('leilaoComLancesEmOrdemAleatoria')]
    #[DataProvider('leilaoComLancesEmOrdemCrescente')]
    #[DataProvider('leilaoComLancesEmOrdemDecrescente')]
    public function testAvaliadorDeveAcharMaiorValor(Leilao $leilao): void
    {
        $this->avaliador->avalia($leilao);

        static::assertEquals(2000, $this->avaliador->getMaiorValor());
    }

    #[DataProvider('leilaoComLancesEmOrdemAleatoria')]
    #[DataProvider('leilaoComLancesEmOrdemCrescente')]
    #[DataProvider('leilaoComLancesEmOrdemDecrescente')]
    public function testAvaliadorDeveAcharMenorValor(Leilao $leilao): void
    {
        $this->avaliador->avalia($leilao);

        static::assertEquals(1000, $this->avaliador->getMenorValor());
    }

    #[DataProvider('leilaoComLancesEmOrdemAleatoria')]
    #[DataProvider('leilaoComLancesEmOrdemCrescente')]
    #[DataProvider('leilaoComLancesEmOrdemDecrescente')]
    public function testAvaliadorDeveOrdenarOs3Lances(Leilao $leilao): void
    {
        $this->avaliador->avalia($leilao);

        $lances = $this->avaliador->getTresMaioresLances();

        static::assertCount(3, $lances);
        static::assertEquals(2000, $lances[0]->getValor());
        static::assertEquals(1500, $lances[1]->getValor());
        static::assertEquals(1000, $lances[2]->getValor());
    }

    public function testAvaliadorDeveRetornarOsMaioresLancesDisponiveis(): void
    {
        $leilao = new Leilao('Fiat 147 0KM');

        $leilao->recebeLance(new Lance(new Usuario('João'), 1000));
        $leilao->recebeLance(new Lance(new Usuario('Maria'), 1500));

        $this->avaliador->avalia($leilao);

        static::assertCount(2, $this->avaliador->getTresMaioresLances());

    }

    /** ** ** ** ** ** ** ** ** ** DADOS ** ** ** ** ** ** ** ** ** **/
    public static function leilaoComLancesEmOrdemAleatoria(): array
    {
        $leilao = new Leilao('Relational Model Database');
        $joao = new Usuario('Edgar Codd');
        $maria = new Usuario('Ada Lovelace');
        $ana = new Usuario('Alan Turing');

        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($ana, 2000));
        $leilao->recebeLance(new Lance($joao, 1000));

        return [
            [$leilao]
        ];
    }

    public static function leilaoComLancesEmOrdemCrescente(): array
    {
        $leilao = new Leilao('Turing Machine');
        $joao = new Usuario('Alan Turing');
        $maria = new Usuario('Ada Lovelace');
        $ana = new Usuario('Edgar Codd');

        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($ana, 2000));

        return [
            [$leilao]
        ];
    }

    public static function leilaoComLancesEmOrdemDecrescente(): array
    {
        $leilao = new Leilao("Algorithm of Babbage's Analytical Engine");
        $joao = new Usuario('Ada Lovelace');
        $maria = new Usuario('Alan Turing');
        $ana = new Usuario('Edgar Codd');

        $leilao->recebeLance(new Lance($ana, 2000));
        $leilao->recebeLance(new Lance($maria, 1500));
        $leilao->recebeLance(new Lance($joao, 1000));

        return [
            [$leilao]
        ];
    }
}
