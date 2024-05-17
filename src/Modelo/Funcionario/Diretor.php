<?php

namespace src\Modelo\Funcionario;

use src\Modelo\Funcionario\Funcionario;
use src\Modelo\Autenticavel;

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