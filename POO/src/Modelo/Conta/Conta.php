<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNome(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpf(): string
    {
        return $this->titular->recuperarCpf();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
