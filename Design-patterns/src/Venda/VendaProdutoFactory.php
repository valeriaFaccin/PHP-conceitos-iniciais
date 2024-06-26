<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\Icms;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda() : Venda
    {
        return new VendaProdutos(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}