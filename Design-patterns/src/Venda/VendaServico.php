<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(\DateTimeInterface $dataVenda, string $nomePrestador)
    {
        parent::__construct($dataVenda);
        $this->nomePrestador = $nomePrestador;
    }
}