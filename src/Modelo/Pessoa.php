<?php

namespace src\Modelo;

use src\Modelo\CPF;

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
            echo "Nome precisa ter pelo menos 2 caracteres" . PHP_EOL;
            exit();
        }
    }
}