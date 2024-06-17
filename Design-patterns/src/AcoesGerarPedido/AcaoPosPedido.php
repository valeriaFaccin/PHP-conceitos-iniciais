<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoPosPedido
{
    public function executarAcao(Pedido $pedido) : void;
}