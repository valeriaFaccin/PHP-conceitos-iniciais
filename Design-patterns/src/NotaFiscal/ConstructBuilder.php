<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItensOrcamento;

class ConstructBuilder
{
    private NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->data = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial)
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;
    }

    public function item(ItensOrcamento $itens)
    {
        $this->notaFiscal->itens[] = $itens;
    }

    public function comOBS(string $obs)
    {
        $this->notaFiscal->obs = $obs;
    }

    public function dataEmissao(\DateTimeInterface $dataEmissao)
    {
        $this->notaFiscal->data = $dataEmissao;
    }
}