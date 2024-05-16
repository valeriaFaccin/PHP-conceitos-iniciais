<?php

require '/home/ixcsoft/cod_php/src/Modelo/Conta/Conta.php';
require '/home/ixcsoft/cod_php/src/Modelo/Conta/ContaPoupanca.php';
require '/home/ixcsoft/cod_php/src/Modelo/Conta/ContaCorrente.php';
require '/home/ixcsoft/cod_php/src/Modelo/Pessoa.php';
require '/home/ixcsoft/cod_php/src/Modelo/Endereco.php';
require '/home/ixcsoft/cod_php/src/Modelo/Conta/Titular.php';
require '/home/ixcsoft/cod_php/src/Modelo/CPF.php';
require '/home/ixcsoft/cod_php/src/Modelo/Funcionario/Funcionario.php';
require '/home/ixcsoft/cod_php/src/Service/ControladorDeBonificacao.php';
require '/home/ixcsoft/cod_php/src/Modelo/Funcionario/Diretor.php';
require '/home/ixcsoft/cod_php/src/Modelo/Funcionario/Gerente.php';
require '/home/ixcsoft/cod_php/src/Modelo/Funcionario/Desenvolvedor.php';
require '/home/ixcsoft/cod_php/src/Modelo/Funcionario/Escritor.php';
require '/home/ixcsoft/cod_php/src/Service/Autenticador.php';

/*require_once '/home/ixcsoft/cod_php/src/autoload.php';

use src\Modelo\Conta\Conta;
use src\Modelo\Conta\Titular;
use src\Modelo\CPF;
use src\Modelo\Endereco; */

$primeiroEndereco = new Endereco('Londres', 'bairro', 'rua', '110B');
$alan = new Titular(
    new CPF('123.122.334-45'), 
    'Alan Turing', 
    $primeiroEndereco
);
$primeiraConta = new ContaCorrente($alan);

$primeiraConta-> depositar(500);
$primeiraConta->sacar(300); 
/* var_dump($primeiraConta); */

echo $primeiraConta-> recuperarSaldo() . PHP_EOL;
echo $primeiraConta-> recuperarCpf() . PHP_EOL;
echo $primeiraConta-> recuperarNome() . PHP_EOL;


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
