<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $novoImposto;

    public function __construct(Imposto $novoImposto = null)
    {
        $this->novoImposto = $novoImposto;
    }

    abstract protected function realizaCalculo(Orcamento $orcamento) : float;

    public function calculaImposto (Orcamento $orcamento) : float
    {
        return $this->realizaCalculo($orcamento) + $this->realizaNovoCalculo($orcamento);
    }

    private function realizaNovoCalculo(Orcamento $orcamento)
    {
        return $this->novoImposto === null ? 0 : $this->novoImposto->calculaImposto($orcamento);
    }
}