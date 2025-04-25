<?php

use Alura\Leilao\Model\{Lance, Leilao, Usuario};
use Alura\Leilao\Service\Avaliador;

require_once 'vendor/autoload.php';

$novoLeilao = new Leilao('Algum produto');

$user1 = new Usuario('Ada Lovelace'); //36 years old when she died
$user2 = new Usuario('Alan Turing'); //41 years old when he died

$novoLeilao->recebeLance(new Lance($user1, 209));
$novoLeilao->recebeLance(new Lance($user2, 112));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($novoLeilao);

$maiorValor = $leiloeiro->getMaiorValor();

echo $maiorValor . PHP_EOL;
