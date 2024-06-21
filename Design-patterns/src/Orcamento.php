<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\EstadosOrcamento\{EmAprovacao, EstadoOrcamento};

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    //concertar $this->valor
    /* public function aplicarDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }  */

    public function aprovar()
    {
        $this->estadoAtual->aprovar($this);
    }

    public function reprovar()
    {
        $this->estadoAtual->reprovar($this);
    }

    public function finalizar()
    {
        $this->estadoAtual->finalizar($this);
    }

    public function addItens(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }
}