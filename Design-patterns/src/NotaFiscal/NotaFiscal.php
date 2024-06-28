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
}