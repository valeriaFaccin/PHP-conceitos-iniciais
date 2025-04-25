<?php

namespace Alura\Leilao\Tests\Unit\Service;

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Service\{Encerrador, EnviarEmail};
use PHPUnit\Framework\MockObject\{Exception, MockObject};
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertCount;

//class LeilaoDaoMock extends LeilaoDaoTest
//{
//    private array $leiloes = [];
//    public function salva(Leilao $leilao):void
//    {
//        $this->leiloes[] = $leilao;
//    }
//
//    public function recuperarNaoFinalizados(): array
//    {
//        return array_filter($this->leiloes, function (Leilao $leilao) {
//            return !$leilao->estaFinalizado();
//        });
//    }
//
//    public function recuperarFinalizados(): array
//    {
//        return array_filter($this->leiloes, function (Leilao $leilao) {
//            return $leilao->estaFinalizado();
//        });
//    }
//
//    public function atualiza(Leilao $leilao): void {}
//}

class EncerradorTest extends TestCase
{
    protected Encerrador $encerrador;
    private MockObject $enviadorEmail;
    private Leilao $TMachine;
    private Leilao $AlgorithmBAE;

    /** @throws Exception */
    protected function setUp(): void
    {
        //Arrange
        $this->TMachine = new Leilao(
            'Turing Machine',
            new \DateTimeImmutable('8 days ago')
        );
        $this->AlgorithmBAE = new Leilao(
            "Algorithm of Babbage's Analytical Engine",
            new \DateTimeImmutable('10 days ago')
        );

        $leilaoDao = $this->createMock(LeilaoDao::class);
        $leilaoDao->method('recuperarNaoFinalizados')->willReturn([$this->TMachine, $this->AlgorithmBAE]);
        $leilaoDao->expects($this->exactly(2))
            ->method('atualiza');

        /*
        ->withConsecutive(
            [$TMachine],
            [$AlgorithmBAE]
         );
        $leilaoDao->salva($TMachine);
        $leilaoDao->salva($AlgorithmBAE);
        */

        $this->enviadorEmail = $this->createMock(EnviarEmail::class);
        $this->encerrador = new Encerrador($leilaoDao, $this->enviadorEmail);
    }

    /** @throws Exception */
    public function testEncerradorLeilaoMaisDeUmaSemana(): void
    {
        $this->encerrador->encerra();

        //Assert - then I guess I was scared
        $leiloes = [$this->TMachine, $this->AlgorithmBAE];
        static::assertCount(2, $leiloes);
        static::assertTrue($leiloes[0]->estaFinalizado());
        static::assertTrue($leiloes[1]->estaFinalizado());
        /* static::assertEquals('Turing Machine', $leiloes[0]->recuperarDescricao());
        static::assertEquals("Algorithm of Babbage's Analytical Engine", $leiloes[1]->recuperarDescricao()); */
    }

    public function testDeveContinuarOProcessamentoAoEncontrarErroAoEnviarEmail(): void
    {
        $e = new \DomainException('Erro ao enviar e-mail');
        $this->enviadorEmail->expects($this->exactly(2))
            ->method('notificarFinalizacaoLeilao')
            ->willThrowException($e);

        $this->encerrador->encerra();
    } 

    public function testEnviaEmailApenasDeLeiloesFinalizados()
    {
        $this->enviadorEmail->expects($this->exactly(2))
            ->method('notificarFinalizacaoLeilao')
            ->willReturnCallback(function (Leilao $leilao) {
                static::assertTrue($leilao->estaFinalizado());
            });

        $this->encerrador->encerra();
    }
}
