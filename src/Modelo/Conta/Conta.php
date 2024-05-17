<?php

namespace src\Modelo\Conta;

use src\Modelo\Conta\Titular;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

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

    public function sacar(float $valorSacar) : void
    {
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo Indisponível" . PHP_EOL;
            return;
        } 
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDepositar) : void
    {
        if($valorDepositar < 0){
            echo "Valor precisa ser positivo" . PHP_EOL;
            return;
        } 
        $this->saldo += $valorDepositar;
    }

    public function recuperarSaldo() : float
    {
        return $this-> saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpf()
    {
        return $this->titular->recuperarCpf();
    }

    public function recuperarNome()
    {
        return $this->titular->recuperarNome();
    }

    public static function recuperarNumeroDeContas() :int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa() : float;
}
