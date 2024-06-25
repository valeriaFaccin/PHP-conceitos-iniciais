<?php

namespace Alura\DesignPattern;

class ItensOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        sleep(1);
        return $this->valor;
    }
}