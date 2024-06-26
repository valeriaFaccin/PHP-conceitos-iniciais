<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

class Ikcv extends ImpostoAlicotas
{
    protected function taxaMaxima(Orcamento $orcamento) : bool
    {
        return /* $orcamento->valor > */ 300 && /* $orcamento->qtdItens > */ 3;
    }

    protected function aplicarTaxaMaxima(Orcamento $orcamento) : float 
    {
        return /* $orcamento->valor * */ 0.04;
    }

    protected function aplicarTaxaMinima(Orcamento $orcamento) : float 
    {
        return /* $orcamento->valor * */ 0.025;
    }
}