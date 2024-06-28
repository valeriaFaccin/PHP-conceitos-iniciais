<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstructNotaFiscalServico extends ConstructBuilder
{
    public function getNotaFiscal() : NotaFiscal
    {
        $valorNota = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNota * 0.06;

        return $this->notaFiscal;
    }
}