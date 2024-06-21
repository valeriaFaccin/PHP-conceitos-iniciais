<?php

use Alura\DesignPattern\{Orcamento, ItensOrcamento};

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItensOrcamento();
$item1->valor = 300;
$item2 = new ItensOrcamento();
$item2->valor = 500;

//$orcamento->addItem($item1);
//$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItensOrcamento();
$item3->valor = 150;
//$orcamentoAntigo->addItem($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItensOrcamento();
$item4->valor = 50;
$item5 = new ItensOrcamento();
$item5->valor = 100;
//$orcamentoMaisAntigoAinda->addItem($item4);
//$orcamentoMaisAntigoAinda->addItem($item5);

//$orcamentoAntigo->addItem($orcamentoMaisAntigoAinda);

//$orcamento->addItem($orcamentoAntigo);

echo $orcamento->valor();
