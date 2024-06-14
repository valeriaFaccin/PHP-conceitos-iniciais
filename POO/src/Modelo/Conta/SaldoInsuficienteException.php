<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Valor do seu saque: $valorSaque é inferior ao seu saldo atual: $saldoAtual" . PHP_EOL;
        parent::__construct($mensagem);
    }
}
