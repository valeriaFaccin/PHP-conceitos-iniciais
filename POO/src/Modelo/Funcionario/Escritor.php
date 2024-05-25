<?php

namespace POO\src\Modelo\Funcionario;

use POO\src\Modelo\Funcionario\Funcionario;

class Escritor extends Funcionario{
    public function calculaBonificacao() : float
    {
        return 700.0;
    }
}