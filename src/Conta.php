<?php

class Conta
{
    public string $cpf;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valorSacar) : void
    {
        if($valorSacar > $this->saldo){
            echo "Saldo Indisponível" . PHP_EOL;
            return;
        } 
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar) : void
    {
        if($valorDepositar < 0){
            echo "Valor precisa ser positivo" . PHP_EOL;
            return;
        } 
        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorTranferido, $contaDeposito) : void
    {
        if($valorTranferido > $this->saldo){
            echo "Saldo Indisponível". PHP_EOL;
            return;
        }    
        $this-> sacar($valorTranferido);
        $contaDeposito-> depositar($valorTranferido);
    }

    public function recuperarSaldo() : float
    {
        return $this-> saldo;
    }

    public function defineNomeTitular($nome) : void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular() : string
    {
        return $this->nomeTitular;
    }

    public function defineCpf($cpf) : void
    {
        $this->cpf = $cpf;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf;
    }
}
