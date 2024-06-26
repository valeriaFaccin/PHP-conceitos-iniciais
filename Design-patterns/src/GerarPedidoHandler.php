<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\AcoesGerarPedido\{AcaoPosPedido, CriarPedidoNoBanco, EnviarPedidoPorEmail, GerarLogPedido};
use Alura\DesignPattern\Pedido\{Pedido, TemplatePedido};

class GerarPedidoHandler
{
    private array $acoesPosPedido = [];
    public function __construct(){}

    public function adicionaAcoesPosPedido(AcaoPosPedido $acao)
    {
        $this->acoesPosPedido[] = $acao; 
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        //concertar orcamento->qtdItens e orcamento->valor
        //$orcamento->qtdItens = $gerarPedido->getNumeroItens();
        //$orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido;
        $template = new TemplatePedido($gerarPedido->getNomeCliente(), new \DateTimeImmutable);
        $pedido->orcamento = $orcamento;
        $pedido->template = $template;

        foreach($this->acoesPosPedido as $acao){
            $acao->executarAcao($pedido);
        }
    }
}