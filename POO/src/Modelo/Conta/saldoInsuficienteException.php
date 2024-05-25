<?php

namespace POO\Src\Modelo\Conta;

use Throwable;

class saldoInsuficienteException extends \DomainException{
    public function __construct(float $valorSaque, float $saldoAtual){
        $message = "Valor do seu saque: $valorSaque é inferior ao seu saldo atual: $saldoAtual" . PHP_EOL;
        parent::__construct($message);
    }
}
