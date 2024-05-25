<?php

use POO\src\Modelo\Conta\ContaCorrente;
use POO\src\Modelo\Conta\Titular;
use POO\src\Modelo\CPF;
use POO\src\Modelo\Endereco;
use POO\src\Modelo\Conta\saldoInsuficienteException;
use POO\Src\Modelo\nomeInvalidoException;

require_once 'autoload.php';

$contaEndereco = new Endereco('Polônia', 'bairro', 'Rua C', '110B');
try{
    $contaCpf = new CPF('123.122.334-45');
    $contaNome = 'Marie Curie';
} catch(InvalidArgumentException | nomeInvalidoException $e){
    echo $e->getMessage();
}

$marie = new Titular($contaCpf, $contaNome, $contaEndereco);

$conta = new ContaCorrente($marie);

try {
    $conta->depositar(500);
} catch (InvalidArgumentException $e) {
    echo "Não é possível depositar um valor negativo" . PHP_EOL;
}

try{
    $conta->sacar(300);
} catch (saldoInsuficienteException $e){
    echo "Você não possui saldo suficiente para realizar essa ação" . PHP_EOL;
    echo $e->getMessage() . PHP_EOL;
}

$conta->recuperarSaldo();
var_dump($conta);

