<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido, GerarPedido, GerarPedidoHandler};

//$valorOrcamento = $argv[1];
//$numeroItens = $argv[2];
//$nomeCliente = $argv[3];

$valorOrcamento = 500;
$numeroItens = 10;
$nomeCliente = 'Ada Lovecraft';

$geraPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$geraPedidoHandler = new GerarPedidoHandler();
$geraPedidoHandler->execute($geraPedido);