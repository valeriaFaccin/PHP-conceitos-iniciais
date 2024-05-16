<?php

/* namespace Modelo; */

abstract class Funcionario extends Pessoa{
    private float $salario;

    public function __construct(CPF $cpf, string $nome, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperarSalario() : float
    {
        return $this->salario;
    }

    public function aumentarSalario(float $aumento) : void
    {
        if($aumento < 0){
            echo "Aumento deve ser positivo" . PHP_EOL;
            return;
        }

        $this->salario += $aumento;
    }

    abstract public function calculaBonificacao() : float;
}