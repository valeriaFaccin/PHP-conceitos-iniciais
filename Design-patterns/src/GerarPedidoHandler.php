<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\AcoesGerarPedido\{AcaoPosPedido, CriarPedidoNoBanco, EnviarPedidoPorEmail, GerarLogPedido};

class GerarPedidoHandler
{
    private array $acoesPosPedido = [];
    public function __construct(){}

    public function adicionaAcoesPosPedido(AcaoPosPedido $acao){
        $this->acoesPosPedido[] = $acao; 
    }

    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido;
        $pedido->dataFim = new \DateTimeImmutable;
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach($this->acoesPosPedido as $acao){
            $acao->executarAcao($pedido);
        }
    }
}