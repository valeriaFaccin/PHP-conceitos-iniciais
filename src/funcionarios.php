<?php

use src\Modelo\CPF;
use src\Modelo\Funcionario\Desenvolvedor;
use src\Modelo\Funcionario\Diretor;
use src\Modelo\Funcionario\Gerente;
use src\Modelo\Funcionario\Escritor;
//use src\Modelo\Service\Autenticador;
use src\Modelo\Service\ControladorDeBonificacao;


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

//$autenticador = new Autenticador();
//$autenticador->login($quintaFuncionaria, '34343');
