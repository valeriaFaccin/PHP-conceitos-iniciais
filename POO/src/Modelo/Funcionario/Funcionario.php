<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(CPF $cpf, string $nome, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperarSalario(): float
    {
        return $this->salario;
    }

    public function aumentarSalario(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;
}
