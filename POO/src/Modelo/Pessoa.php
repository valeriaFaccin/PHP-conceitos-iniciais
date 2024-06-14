<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
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
