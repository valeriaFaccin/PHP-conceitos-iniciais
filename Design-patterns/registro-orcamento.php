<?php

use Alura\DesignPattern\{Orcamento, RegistroDeOrcamento};
use Alura\DesignPattern\http\{CurlsHttpAdapter, ReactPHPHttpAdapter};

require_once 'vendor/autoload.php';

$registroOrcamento = new RegistroDeOrcamento(new ReactPHPHttpAdapter());

$registroOrcamento->registrar(new Orcamento());