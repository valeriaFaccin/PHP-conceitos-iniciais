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
require '/home/ixcsoft/cod_php/src/Modelo/Autenticavel.php';


$primeiraFuncionaria = new Diretor(
    new CPF('345.234.687-99'), 
    'Maria José Dupré', 
    3000
);
/* var_dump($primeiraFuncionaria); */

$segundaFuncionaria = new Gerente(
    new CPF('298.385.124-55'), 
    'Clarice Lispector', 
    1000
);

$terceiroFuncionario = new Desenvolvedor(
    new CPF('298.385.124-55'), 
    'Chico Buarque', 
    1000
);

$quartoFuncionario = new Escritor(
    new CPF('425.376.589-72'), 
    'Graciliano Ramos', 
    2000
);

$quintaFuncionaria = new Diretor(
    new CPF('385.193.242-26'), 
    'Lydia Fagundes Telles', 
    5000
);

$controlador = new ControladorDeBonificacao();
$controlador->adicionarBonificacao($primeiraFuncionaria);
$controlador->adicionarBonificacao($segundaFuncionaria);
$controlador->adicionarBonificacao($terceiroFuncionario);
$controlador->adicionarBonificacao($quartoFuncionario);

$terceiroFuncionario->subirDeNivel();

echo 'Total Bonificações: ' . $controlador->recuperarTotalBonificacao() . PHP_EOL;

$autenticador = new Autenticador();
$autenticador->login($quintaFuncionaria, '34343');
