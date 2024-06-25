<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};
use Alura\DesignPattern\Pedido\{Pedido, TemplatePedido};

$pedido = new Pedido();
$template = new TemplatePedido('Alan Turing', new DateTimeImmutable());
$pedido->template = $template;

/* $orcamentoExportado = new PedidoExportado($pedido); */
$orcamentoExportadoXml = new ArquivoXmlExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);
