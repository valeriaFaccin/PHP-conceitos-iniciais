<?php
use Alura\DesignPattern\ListaDeOrcamento;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

/* $orcamento1 = new Orcamento();
$orcamento1->qtdItens = 7;
$orcamento1->aprovar();
$orcamento1->valor = 500;

$orcamento2 = new Orcamento();
$orcamento2->qtdItens = 3;
$orcamento2->aprovar();
$orcamento2->finalizar();
$orcamento2->valor = 200;

$orcamento3 = new Orcamento();
$orcamento3->qtdItens = 12;
$orcamento3->reprovar();
$orcamento3->valor = 1500; */

$listaOrcamentos = new ListaDeOrcamento();
$listaOrcamentos->adicionaOrcamento($orcamento1);
$listaOrcamentos->adicionaOrcamento($orcamento2);
$listaOrcamentos->adicionaOrcamento($orcamento3);

foreach($listaOrcamentos as $orcamentos){
    echo "Valor: " . $orcamentos->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamentos->estadoAtual) . PHP_EOL;
    echo "Quantidade Itens" . $orcamentos->qtdItens .PHP_EOL;
}