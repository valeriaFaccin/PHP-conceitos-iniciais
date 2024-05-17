<?php

namespace src\Modelo\Funcionario;

use src\Modelo\Funcionario\Funcionario;
use src\Modelo\Autenticavel;

class Gerente extends Funcionario {
    public function calculaBonificacao() : float
    {
        return $this->recuperarSalario();
    }

    /* public function autenticarSenha(string $senha) : bool
    {
        return $senha === '1234567';
    } */
}