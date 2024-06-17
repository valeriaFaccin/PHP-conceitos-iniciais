<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;

class ListaDeOrcamento implements \IteratorAggregate
{
    private array $listaOrcamentos;

    public function __construct()
    {
        $this->listaOrcamentos = [];
    }

    public function adicionaOrcamento(Orcamento $orcamento)
    {
        $this->listaOrcamentos[] = $orcamento;
    }

    public function getIterator() : \Traversable
    {
        return new \ArrayIterator($this->listaOrcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->listaOrcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }
}