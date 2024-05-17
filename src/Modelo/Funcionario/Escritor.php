<?php

namespace src\Modelo\Funcionario;

use src\Modelo\Funcionario\Funcionario;

class Escritor extends Funcionario{
    public function calculaBonificacao() : float
    {
        return 700.0;
    }
}