<?php
use Alura\DesignPattern\{CalculadoraDeImpostos, Orcamento, CalculadoraDeDescontos};
use Alura\DesignPattern\Impostos\{Icms, Iss};

require 'vendor/autoload.php';


//calcula por Imposto
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
/* $orcamento->valor = 100; */

/* echo $calculadora->calcular($orcamento, new Iss(new Icms())) . PHP_EOL; */

//calcula por Desconto
$calculadoraDescontos = new CalculadoraDeDescontos();

$novoOrcamento = new Orcamento();
/* $novoOrcamento->valor = 600;
$novoOrcamento->qtdItens = 7; */

echo $calculadoraDescontos->calcularDescontos($novoOrcamento) . PHP_EOL;