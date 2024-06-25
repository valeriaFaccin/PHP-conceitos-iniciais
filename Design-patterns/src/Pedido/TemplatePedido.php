<?php

namespace Alura\DesignPattern\Pedido;

class TemplatePedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFim;

    public function __construct(string $nomeCliente, \DateTimeInterface $dataFim) 
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFim = $dataFim;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getDataFim(): \DateTimeInterface
    {
        return $this->dataFim;
    }
}