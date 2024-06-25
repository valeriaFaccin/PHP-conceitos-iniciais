<?php

use Alura\DesignPattern\{ Orcamento, Pedido, DadosExtrinsecos };

require_once 'vendor/autoload.php';

$pedidos = [];
$dado = new DadosExtrinsecos(md5('a'), new DateTimeImmutable());

for($i = 0; $i < 10000; $i++){
    $pedido = new Pedido();
    $pedido->dados = $dado;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL;