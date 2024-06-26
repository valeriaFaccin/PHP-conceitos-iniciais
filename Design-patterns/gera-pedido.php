<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, GerarPedidoHandler, GerarPedido};
use Alura\DesignPattern\Pedido\{ Pedido };

use Alura\DesignPattern\AcoesGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, GerarLogPedido};

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

//$valorOrcamento = 500;
//$numeroItens = 10;
//$nomeCliente = 'Ada Lovecraft';

$geraPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$geraPedidoHandler = new GerarPedidoHandler();

$geraPedidoHandler->adicionaAcoesPosPedido(new CriarPedidoNoBanco());
$geraPedidoHandler->adicionaAcoesPosPedido(new EnviarPedidoPorEmail());
$geraPedidoHandler->adicionaAcoesPosPedido(new GerarLogPedido());

$geraPedidoHandler->execute($geraPedido);