<?php
use Alura\DesignPattern\{CalculadoraDeImpostos, Orcamento};
use Alura\DesignPattern\Impostos\{Icms, Iss};

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $calculadora->calcular($orcamento, new Iss()) . PHP_EOL;