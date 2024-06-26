<?php

namespace Alura\DesignPattern\NotaFiscal;

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
        return 0;
    }
}