<?php

use Alura\DesignPattern\{Orcamento, ItensOrcamento, CacheOrcamentoProxy};

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItensOrcamento();
$item1->valor = 300;
$item2 = new ItensOrcamento();
$item2->valor = 500;

$orcamento->addItens($item1);
$orcamento->addItens($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItensOrcamento();
$item3->valor = 150;
$orcamentoAntigo->addItens($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItensOrcamento();
$item4->valor = 50;
$item5 = new ItensOrcamento();
$item5->valor = 100;
$orcamentoMaisAntigoAinda->addItens($item4);
$orcamentoMaisAntigoAinda->addItens($item5);

$orcamentoAntigo->addItens($orcamentoMaisAntigoAinda);

$orcamento->addItens($orcamentoAntigo);

$proxy = new CacheOrcamentoProxy($orcamento);

//$proxy->addItem($item1); throw new exception

echo $proxy->valor() . PHP_EOL;
echo $proxy->valor() . PHP_EOL;
