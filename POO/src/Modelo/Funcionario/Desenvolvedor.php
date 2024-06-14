<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function subirDeNivel()
    {
        $this->aumentarSalario($this->recuperarSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}
