<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItensOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public string $obs;
    public float $valorImpostos;
    public array $itens;
    public \DateTimeInterface $data;

    public function valor() : float
    {
        return array_reduce(
            $this->itens, 
            function(float $valorAcumulado, ItensOrcamento $itemAtual) {
                return $valorAcumulado + $itemAtual->valor();
            }, 
            0
        );
        
    }

    public function clonar() : NotaFiscal
    {
        $clone = new NotaFiscal();
        $clone->cnpj = $this->cnpj;
        $clone->razaoSocial = $this->razaoSocial;
        $clone->obs = $this->obs;
        $clone->valorImpostos = $this->valorImpostos;
        $clone->itens = $this->itens;
        $clone->data = $this->data;

        return $clone;
    }
}