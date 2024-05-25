<?php

namespace POO\src\Modelo\Service;

use POO\src\Modelo\Funcionario\Funcionario;

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