<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoPosPedido
{
    public function executarAcao(Pedido $pedido) : void
    {
        echo 'Geração do Pedido' . PHP_EOL;
    }
}