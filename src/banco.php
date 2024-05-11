<?php

require '/home/ixcsoft/cod_php/src/Conta.php';
require '/home/ixcsoft/cod_php/src/Titular.php';
require '/home/ixcsoft/cod_php/src/CPF.php';

$alan = new Titular(new CPF('123.122.334-45'), 'Alan Turing');
$primeiraConta = new Conta($alan);
$primeiraConta-> depositar(500);
$primeiraConta->sacar(300); 

echo $primeiraConta-> recuperarSaldo() . PHP_EOL;
//echo $primeiraConta-> recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta-> recuperaNomeTitular() . PHP_EOL;

$segundaConta = new Conta(new Titular(NEW CPF('156.987.564-40'), 'Kaladin Stormblessed'));
$terceiraConta = new Conta(new Titular(new CPF('643.864.934-83'), 'Shallan'));
$quartaConta = new Conta(new Titular(NEW CPF('848.923.374-98'), 'Adolin Kholin'));
$quintaConta = new Conta(new Titular(NEW CPF('000.000.000-00'), "Talenel d'Elrim"));
$terceiraConta-> depositar(550000);
$quartaConta-> depositar(10000000);
unset($quintaConta);


echo Conta::recuperarNumeroDeContas() . PHP_EOL;
