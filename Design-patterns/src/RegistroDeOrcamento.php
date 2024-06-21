<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\http\HttpAdapter;

class RegistroDeOrcamento
{
    private HttpAdapter $http;
    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }
    public function registrar(Orcamento $orcamento) : void
    {
        if(!$orcamento->estadoAtual instanceof Finalizado){
            throw new \DomainException('Apenas Orçamentos Finalizados podem ser registrados');
        }
        //concertar orcamento->valor
        /* $this->http->post('http://api.registrar.orcamento', [
            "valor" => $orcamento->valor,
            "quantidade" => $orcamento->qtdItens
        ]); */
    }
}