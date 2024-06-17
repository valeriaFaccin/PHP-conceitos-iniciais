<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoPosPedido
{
    public function executarAcao(Pedido $pedido) : void
    {
        echo 'Enviando por e-mail o Pedido gerado' . PHP_EOL;
    }
}