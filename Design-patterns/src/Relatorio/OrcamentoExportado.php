<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            //concertar orcamento->valor e orcamento->qtdItens
            /* 'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->qtdItens */
        ];
    }
}
