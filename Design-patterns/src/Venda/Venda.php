<?php

namespace Alura\DesignPattern\Venda;

abstract class Venda
{
    public \DateTimeInterface $dataVenda;

    public function __construct(\DateTimeInterface $dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }
}