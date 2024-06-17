<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct(){}

    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido;
        $pedido->dataFim = new \DateTimeImmutable;
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}