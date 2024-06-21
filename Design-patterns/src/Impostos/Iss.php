<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

class Iss /* extends Imposto */ 
{
    public function realizaCalculo(Orcamento $orcamento): float
    {
        //concertar orcamento->valor
        return /* $orcamento->valor * */ 0.06;
    }
}