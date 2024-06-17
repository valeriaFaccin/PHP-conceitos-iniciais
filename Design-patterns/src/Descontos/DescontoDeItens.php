<?php

namespace Alura\DesignPattern\Descontos;
use Alura\DesignPattern\Orcamento;

class DescontoDeItens extends Desconto{
    public function calcularDescontos (Orcamento $orcamento) : float
    {
        if($orcamento->qtdItens > 5){
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calcularDescontos($orcamento);
    }
}