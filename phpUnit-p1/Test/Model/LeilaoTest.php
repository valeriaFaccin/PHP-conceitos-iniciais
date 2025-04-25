<?php

namespace Alura\Leilao\Test\Model;

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    public function testApenasUmLancePorVez(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Usuário não pode propor dois lances consecutivos');

        $leilao = new Leilao('The stored program concept');

        $user = new Usuario('John Von Neumann');
        $leilao->recebeLance(new Lance($user, 53));
        $leilao->recebeLance(new Lance($user, 121));

        //static::assertCount(1, $leilao->getLances());
        //static::assertEquals(53, $leilao->getLances()[0]->getValor());
    }

    public function testAte5LancesPorUsuario(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Usuário não pode propor cinco ou mais lances no mesmo leilão');
        $leilao = new Leilao('Relational Model Algebra and Database');
        $user = new Usuario('Edgar Codd');
        $anotherUser = new Usuario('Ada Lovelace');

        //years since born
        $leilao->recebeLance(new Lance($user, 101));
        $leilao->recebeLance(new Lance($anotherUser, 209));

        //age when they died
        $leilao->recebeLance(new Lance($user, 79));
        $leilao->recebeLance(new Lance($anotherUser, 36));

        //year of birth
        $leilao->recebeLance(new Lance($user, 1923));
        $leilao->recebeLance(new Lance($anotherUser, 1815));

        //year of death
        $leilao->recebeLance(new Lance($user, 2003));
        $leilao->recebeLance(new Lance($anotherUser, 1852));

        //years since death
        $leilao->recebeLance(new Lance($user, 21));
        $leilao->recebeLance(new Lance($anotherUser, 172));

        //in honor of me mistakenly filling the information about Von Neumann instead of Codd:
        //here lies the years since born of Von Neumann - the 'should not be accepted Lance'
        $leilao->recebeLance(new Lance($user, 121));

        //static::assertCount(10, $leilao->getLances());
        //static::assertEquals(172, $leilao->getLances()[array_key_last($leilao->getLances())]->getValor());
    }

    #[DataProvider('geraLances')]
    public function testLeilaoRecebeLances(int $qtdLances, Leilao $leilao, array $lances): void
    {
        static::assertCount($qtdLances, $leilao->getLances());
        foreach ($lances as $i => $valor) {
            static::assertEquals($valor, $leilao->getLances()[$i]->getValor());
        }
    }

    public function testLeilaoFinalizadoNaoRecebeNovosLances(): void
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('Leilão finalizado não pode receber novos lances');

        $leilao = new Leilao('Relational Model Algebra and Database');
        $user1 = new Usuario('Edgar Codd');
        $user2 = new Usuario('John Von Neumann');

        $leilao->recebeLance(new Lance($user1, 101));
        $leilao->finalizarLeilao();

        $leilao->recebeLance(new Lance($user2, 209));
    }

    public static function geraLances(): array
    {
        $user1 = new Usuario('Ada Lovelace');
        $user2 = new Usuario('Alan Turing');

        $leilao2Lances = new Leilao("Algorithm of Babbage's Analytical Engine");
        $leilao2Lances->recebeLance(new Lance($user1, 36));
        $leilao2Lances->recebeLance(new Lance($user2, 41));

        $leilao1Lance = new Leilao('Turing Machine');
        $leilao1Lance->recebeLance(new Lance($user2, 41));

        return [
            '2-lances' => [2, $leilao2Lances, [36, 41]],
            '1-lance' => [1, $leilao1Lance, [41]]
        ];
    }
}
