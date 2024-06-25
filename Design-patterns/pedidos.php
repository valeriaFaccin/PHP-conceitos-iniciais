<?php

use Alura\DesignPattern\{ Orcamento };
use Alura\DesignPattern\Pedido\{ Pedido, TemplatePedido };

require_once 'vendor/autoload.php';

$pedidos = [];
$dado = new TemplatePedido(md5('a'), new DateTimeImmutable());

for($i = 0; $i < 10000; $i++){
    $pedido = new Pedido();
    $pedido->template = $dado;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL;