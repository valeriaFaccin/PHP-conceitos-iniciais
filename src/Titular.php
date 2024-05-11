<?php

class Titular{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validarNomeTitular(string $nomeTitular) : void
    {
        if(strlen($nomeTitular) < 2){
            echo "Nome precisa ter pelo menos 2 caracteres" . PHP_EOL;
            exit();
        }
    }
}