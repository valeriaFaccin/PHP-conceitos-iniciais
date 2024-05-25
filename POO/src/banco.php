<?php

require_once 'autoload.php';

use POO\src\Modelo\Conta\Conta;
use POO\src\Modelo\Conta\ContaCorrente;
use POO\src\Modelo\Conta\ContaPoupanca;
use POO\src\Modelo\Conta\Titular;
use POO\src\Modelo\CPF;
use POO\src\Modelo\Endereco;

if(trait_exists('AcessaAtributo')){
    echo 'Trait exists' . PHP_EOL;
    exit();
}

$primeiroEndereco = new Endereco('Londres', 'bairro', 'Rua Ipê', '110B');
$alan = new Titular(
    new CPF('123.122.334-45'), 
    'Alan Turing', 
    $primeiroEndereco
);
$primeiraConta = new ContaCorrente($alan);

$primeiraConta-> depositar(500);
$primeiraConta->sacar(300); 
/* var_dump($primeiraConta); */

echo "Dados primeira conta: " . PHP_EOL;
echo $primeiraConta-> recuperarSaldo() . PHP_EOL;
echo $primeiraConta-> recuperarCpf() . PHP_EOL;
echo $primeiraConta-> recuperarNome() . PHP_EOL;
echo $primeiroEndereco . PHP_EOL;
echo $primeiroEndereco->cidade . PHP_EOL;


$enderecoGeral = new Endereco ('Shattered Plains', "Kholin's war camp", 'main street', '100B');

$segundaConta = new ContaPoupanca(
    new Titular(new CPF('156.987.564-40'), 
    'Kaladin Stormblessed', 
    $enderecoGeral)
);
$segundaConta-> depositar(500);
$segundaConta->sacar(100);
echo 'Saldo segunda conta: ' . $segundaConta-> recuperarSaldo() . PHP_EOL;

$terceiraConta = new ContaPoupanca(
    new Titular(new CPF('643.864.934-83'), 
    'Shallan Davar', 
    $enderecoGeral)
);
$terceiraConta-> depositar(550000);

$quartaConta = new ContaCorrente(
    new Titular(new CPF('848.923.374-98'), 
    'Adolin Kholin', 
    $enderecoGeral)
);
$quartaConta-> depositar(10000000);

$quintaConta = new ContaPoupanca(
    new Titular(new CPF('000.000.000-00'), 
    "Talenel d'Elrim", 
    $enderecoGeral)
);
unset($quintaConta);

echo 'Total contas: ' . Conta::recuperarNumeroDeContas() . PHP_EOL;
