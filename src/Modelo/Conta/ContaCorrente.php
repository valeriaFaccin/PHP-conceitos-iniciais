<?php

class ContaCorrente extends Conta{

    protected function percentualTarifa() : float
    {
        return 0.05;
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
}