<?php

namespace alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento 
{
    /**
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento) : float;

    public function aprovar(Orcamento $orcamento)
    {
        throw new \DomainException('Esse orçamento não pode ser aprovado');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new \DomainException('Esse orçamento não pode ser reprovado');
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new \DomainException('Esse orçamento não pode ser finalizado');
    }
}