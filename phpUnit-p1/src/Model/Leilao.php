<?php

namespace Alura\Leilao\Model;

class Leilao
{
    /** @var Lance[] */
    private array $lances;

    /** @var string */
    private string $descricao;

    /** @var bool */
    private bool $finalizado;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [];
        $this->finalizado = false;
    }

    public function recebeLance(Lance $lance): void
    {
        if($this->estaFinalizado()) {
            throw new \DomainException('Leilão finalizado não pode receber novos lances');
        }

        if(!empty($this->lances) && $this->ultimoUsuario($lance)) {
            throw new \DomainException('Usuário não pode propor dois lances consecutivos.');
        }

        $totalLancesUser = $this->totalLancesUsuario($lance->getUsuario());
        if($totalLancesUser >= 5) {
            throw new \DomainException('Usuário não pode propor cinco ou mais lances no mesmo leilão');
        }

        $this->lances[] = $lance;
    }

    /**
     * @return Lance[]
     */
    public function getLances(): array
    {
        return $this->lances;
    }

    public function ultimoUsuario(Lance $lance): bool
    {
        $ultimoLance = $this->lances[array_key_last($this->lances)];
        return $lance->getUsuario() === $ultimoLance->getUsuario();
    }

    public function totalLancesUsuario(Usuario $user): int
    {
        return array_reduce(
            $this->lances,
            function (int $totalAcumulado, Lance $lanceAtual) use ($user) {
                if ($lanceAtual->getUsuario() === $user) {
                    return $totalAcumulado + 1;
                }
                return $totalAcumulado;
            },
            0
        );
    }

    public function finalizarLeilao(): void
    {
        $this->finalizado = true;
    }

    public function estaFinalizado(): bool
    {
        return $this->finalizado;
    }
}
