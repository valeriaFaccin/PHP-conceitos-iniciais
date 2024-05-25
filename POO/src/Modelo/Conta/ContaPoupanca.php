<?php

namespace POO\src\Modelo\Conta;

use POO\src\Modelo\Conta\Conta;

class ContaPoupanca extends Conta{
    protected function percentualTarifa() : float
    {
        return 0.03;
    }
}