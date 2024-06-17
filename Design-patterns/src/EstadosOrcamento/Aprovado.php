<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizar(Orcamento $orcamento) 
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}