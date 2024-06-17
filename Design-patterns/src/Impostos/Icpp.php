<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoAlicotas 
{
    protected function taxaMaxima(Orcamento $orcamento) : bool
    {
        return $orcamento->valor > 500;
    }

    protected function aplicarTaxaMaxima(Orcamento $orcamento) : float 
    {
        return $orcamento->valor * 0.03;
    }

    protected function aplicarTaxaMinima(Orcamento $orcamento) : float 
    {
        return $orcamento->valor * 0.02;
    }
}