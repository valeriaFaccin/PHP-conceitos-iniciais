<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private float $menorValor = INF;
    private float $maiorValor = 0;

    /** @var Lance[]|array */
    private array $maiores;

    public function avalia(Leilao $leilao): void
    {
        $leilao->finaliza();

        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) {
                $this->maiorValor = $lance->getValor();
            }

            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }

            $this->maiores = $this->avaliaTresMaioresLances($leilao);
        }
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getSomething(): array
    {
        return [
            [$this->menorValor],
            [$this->maiorValor],
            [$this->maiores]
        ];
    }

    /** @return Lance[] */
    public function getTresMaioresLances(): array
    {
        return $this->maiores;
    }

    /**
     * @param Leilao $leilao
     * @return Lance[]|array
     */
    private function avaliaTresMaioresLances(Leilao $leilao): array
    {
        $lances = $leilao->getLances();
        usort($lances, function (Lance $lance1, Lance $lance2) {
            return $lance2->getValor() - $lance1->getValor();
        });

        return array_slice($lances, 0, 3);
    }
}
