<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItensOrcamento;

abstract class ConstructBuilder
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->data = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial)
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function item(ItensOrcamento $itens)
    {
        $this->notaFiscal->itens[] = $itens;

        return $this;
    }

    public function comOBS(string $obs)
    {
        $this->notaFiscal->obs = $obs;

        return $this;
    }

    public function dataEmissao(\DateTimeInterface $dataEmissao)
    {
        $this->notaFiscal->data = $dataEmissao;

        return $this;
    }

    abstract public function getNotaFiscal() : NotaFiscal;
}