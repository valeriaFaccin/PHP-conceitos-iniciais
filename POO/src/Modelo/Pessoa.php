<?php

namespace POO\src\Modelo;

use POO\src\Modelo\CPF;
use POO\src\Modelo\nomeInvalidoException;

abstract class Pessoa {
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome() : string
    {
        return $this->nome;
    }

    public function recuperarCpf() : string
    {
        return $this->cpf->recuperarCpf();
    }

    final protected function validarNomeTitular(string $nomeTitular) : void
    {
        if(strlen($nomeTitular) < 2){
            throw new nomeInvalidoException($nomeTitular);
        }
    }
}