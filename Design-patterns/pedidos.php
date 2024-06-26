<?php

use Alura\DesignPattern\{ Orcamento };
use Alura\DesignPattern\Pedido\{ CriaPedido };

require_once 'vendor/autoload.php';

$pedidos = [];
$criarPedido = new CriaPedido();

$dataHoje = new \DateTimeImmutable();

for($i = 0; $i < 10000; $i++){
    $orcamento = new Orcamento();
    $pedido = $criarPedido->criarPedido('Alan Turing', date('Y-m-d'), $orcamento);

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL;