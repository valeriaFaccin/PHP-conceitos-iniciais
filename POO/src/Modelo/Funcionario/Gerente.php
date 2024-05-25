<?php

namespace POO\src\Modelo\Funcionario;

use POO\src\Modelo\Funcionario\Funcionario;
use POO\src\Modelo\Autenticavel;

class Gerente extends Funcionario {
    //use POO\src\Modelo\AcessaAtributo;
    public function calculaBonificacao() : float
    {
        return $this->recuperarSalario();
    }

    public function autenticarSenha(string $senha) : bool
    {
        return $senha === '1234567';
    }
}