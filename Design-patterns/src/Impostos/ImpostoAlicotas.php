<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

abstract class ImpostoAlicotas extends Imposto
{
    public function realizaCalculo(Orcamento $orcamento): float
    {
        if($this->taxaMaxima($orcamento)){
            return $this->aplicarTaxaMaxima($orcamento);
        }

        return $this->aplicarTaxaMinima($orcamento);
    }

    abstract protected function taxaMaxima(Orcamento $orcamento) : bool;
    abstract protected function aplicarTaxaMaxima(Orcamento $orcamento) : float;
    abstract protected function aplicarTaxaMinima(Orcamento $orcamento) : float;
}