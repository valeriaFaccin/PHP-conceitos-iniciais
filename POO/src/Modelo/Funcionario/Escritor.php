<?php

namespace Alura\Banco\Modelo\Funcionario;

class Escritor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 700;
    }
}
