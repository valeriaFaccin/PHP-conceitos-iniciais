<?php

namespace src\Modelo\Conta;

use src\Modelo\Conta\Conta;

class ContaPoupanca extends Conta{
    protected function percentualTarifa() : float
    {
        return 0.03;
    }
}