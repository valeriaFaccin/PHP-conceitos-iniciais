<?php

namespace Alura\DesignPattern\Descontos;
use Alura\DesignPattern\Orcamento;

class DescontoDePreco extends Desconto
{
    public function calcularDescontos(Orcamento $orcamento) : float
    {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.05;
        }
        return $this->proximoDesconto->calcularDescontos($orcamento);
    }
}