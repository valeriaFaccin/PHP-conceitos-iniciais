<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\Descontos\{DescontoDeItens, DescontoDePreco, SemDesconto};

class CalculadoraDeDescontos
{
    public function calcularDescontos(Orcamento $orcamento) : float 
    {
        $cadeiaDescontos = new DescontoDeItens(
            new DescontoDePreco(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDescontos->calcularDescontos($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informarDesconto($descontoCalculado);
        
        return $descontoCalculado;
    }
}