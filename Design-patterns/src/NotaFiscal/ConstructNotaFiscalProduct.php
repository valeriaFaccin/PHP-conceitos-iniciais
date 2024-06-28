<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstructNotaFiscalProduct extends ConstructBuilder
{
    public function getNotaFiscal() : NotaFiscal
    {
        $valorNota = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNota * 0.02;

        return $this->notaFiscal;
    }
}