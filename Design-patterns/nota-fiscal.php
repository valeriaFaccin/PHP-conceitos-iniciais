<?php
use Alura\DesignPattern\ItensOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstructNotaFiscalProduct;
use Alura\DesignPattern\NotaFiscal\ConstructNotaFiscalServico;

require_once 'vendor/autoload.php';

$builder = new ConstructNotaFiscalServico();
$item = new ItensOrcamento();
$item->valor = 500;

$builder->paraEmpresa('123123123', 'Nome da Empresa')
        ->comOBS('Uma observação')
        ->item($item);

$notaFiscal = $builder->getNotaFiscal();

echo $notaFiscal->valor() . PHP_EOL;