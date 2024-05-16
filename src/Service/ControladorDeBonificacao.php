<?php

class ControladorDeBonificacao{
    private float $totalBonificacao = 0;

    public function adicionarBonificacao(Funcionario $funcionario){
        $this->totalBonificacao += $funcionario->calculaBonificacao(); 
    }

    public function recuperarTotalBonificacao() : float
    {
        return $this->totalBonificacao;
    }
}