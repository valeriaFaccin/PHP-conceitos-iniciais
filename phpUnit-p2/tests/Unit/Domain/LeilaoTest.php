<?php

namespace Alura\Leilao\Tests\Unit\Domain;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use DomainException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    public function testProporLanceEmLeilaoFinalizadoDeveLancarExcecao(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Este leilão já está finalizado');

        $leilao = new Leilao('Fiat 147 0KM');
        $leilao->finaliza();

        $leilao->recebeLance(new Lance(new Usuario(''), 1000));
    }

    /**
     * @param int $qtdEsperado
     * @param Lance[] $lances
     */
    #[DataProvider('dadosParaProporLances')]
    public function testProporLancesEmLeilaoDeveFuncionar(int $qtdEsperado, array $lances): void
    {
        $leilao = new Leilao('Fiat 147 0KM');
        foreach ($lances as $lance) {
            $leilao->recebeLance($lance);
        }

        static::assertCount($qtdEsperado, $leilao->getLances());
    }

    public function testMesmoUsuarioNaoPodeProporDoisLancesSeguidos(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Usuário já deu o último lance');
        $usuario = new Usuario('Ganancioso');

        $leilao = new Leilao('Objeto inútil');

        $leilao->recebeLance(new Lance($usuario, 1000));
        $leilao->recebeLance(new Lance($usuario, 1100));
    }

    public static function dadosParaProporLances(): array
    {
        $usuario1 = new Usuario('Usuário 1');
        $usuario2 = new Usuario('Usuário 2');
        return [
            [1, [new Lance($usuario1, 1000)]],
            [2, [new Lance($usuario1, 1000), new Lance($usuario2, 2000)]],
        ];
    }
}
