<?php
use Alura\DesignPattern\ItensOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstructNotaFiscalProduct;
use Alura\DesignPattern\NotaFiscal\ConstructNotaFiscalServico;

require_once 'vendor/autoload.php';

$builder = new ConstructNotaFiscalServico();
$item = new ItensOrcamento();
$item->valor = 500;

$notaFiscal = $builder->paraEmpresa('123123123', 'Nome da Empresa')
        ->comOBS('Uma observação')
        ->item($item)
        ->getNotaFiscal();

echo $notaFiscal->valor() . PHP_EOL;

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItensOrcamento();

var_dump($notaFiscal, $notaFiscal2);