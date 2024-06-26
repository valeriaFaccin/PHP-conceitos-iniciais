<?php

namespace Alura\DesignPattern\Venda;

class VendaProdutos extends Venda
{
    /** @var $peso em gramas */
    private int $peso;

    public function __construct(\DateTimeInterface $dataVenda, int $peso)
    {
        parent::__construct($dataVenda);
        $this->peso = $peso;
    }
}