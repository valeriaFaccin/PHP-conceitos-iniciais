<?php

class Conta
{
    private Titular $titular;
    private CPF $cpf;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

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

    public function transferir(float $valorTranferido, Conta $contaDeposito) : void
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

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpf->recuperarCpf();
    }

    public static function recuperarNumeroDeContas() :int
    {
        return self::$numeroDeContas;
    }
}
