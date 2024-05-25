<?php

namespace POO\src\Modelo\Funcionario;

use POO\src\Modelo\Funcionario\Funcionario;
use POO\src\Modelo\Autenticavel;

class Diretor extends Funcionario{
    public function calculaBonificacao() : float
    {
        return $this->recuperarSalario() * 2;
    }

    public function autenticarSenha(string $senha) : bool
    {
        return $senha === '40028922';
    }
}