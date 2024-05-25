<?php

namespace POO\src\Modelo\Conta;

use POO\src\Modelo\CPF;
use POO\src\Modelo\Pessoa;
use POO\src\Modelo\Endereco;
use POO\src\Modelo\Autenticavel;

class Titular extends Pessoa {
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco() : Endereco
    {
        return $this->endereco;
    }

    /* public function autenticarSenha(string $senha) : bool
    {
        return $senha === '101010';
    } */
}
