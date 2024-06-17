<?php 

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class GerarLogPedido implements AcaoPosPedido
{
    public function executarAcao(Pedido $pedido) : void
    {
        echo 'Geração do log de gerar Pedido' . PHP_EOL;
    }
}