<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovar(Orcamento $orcamento) 
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprovar(Orcamento $orcamento) 
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}