<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriaPedido
{
    private array $templates = [];
    public function criarPedido(string $nomeCliente, string $data, Orcamento $orcamento) : Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $data);
        $pedido = new Pedido();
        $pedido->orcamento = $orcamento;
        $pedido->template = $template;
        return $pedido;
    }

    public function gerarTemplatePedido(string $nomeCliente, string $data) : TemplatePedido
    {
        $hash = md5($nomeCliente . $data);
        if(!array_key_exists($hash, $this->templates)){
            $template = new TemplatePedido($nomeCliente, new \DateTimeImmutable($data));
            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}