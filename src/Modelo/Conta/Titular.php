<?php
/* 
namespace src\Modelo\Conta;

use src\Modelo\Pessoa;
use src\Modelo\Endereco;
use src\Modelo\CPF; */

class Titular extends Pessoa implements Autenticavel{
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

    public function autenticarSenha(string $senha) : bool
    {
        return $senha === '101010';
    }
}
