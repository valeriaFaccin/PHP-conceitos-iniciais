<?php

namespace Alura\DesignPattern;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFim;
    public Orcamento $orcamento;
}