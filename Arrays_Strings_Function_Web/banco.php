<?php
//include 'funcoes_banco.php'; - inclui arquivo externo mas não obrigatoriamente, caso não seja encontrado retorna apenas um aviso
//require 'funcoes_banco.php'; - inclui o arquivo externo como obrigatório
require_once 'funcoes_banco.php'; // garante que o arquivo será incluido apenas uma vez
$contasCorrentes = [
    '123.456.782-12' => [
        'titular' => 'Pedro',
        'saldo'=> 100
    ], 
    '987.654.324-67' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '198.234.158-90' => [
        'titular' => 'Bernardo',
        'saldo' => 5000
    ]
];

$contasCorrentes['123.456.782-12'] = sacar($contasCorrentes['123.456.782-12'], 500);
$contasCorrentes['987.654.324-67'] = sacar($contasCorrentes['987.654.324-67'], 500);
$contasCorrentes['198.234.158-90'] = depositar($contasCorrentes['198.234.158-90'],-500);

titularComLetrasMaiusculas($contasCorrentes['123.456.782-12']);

unset($contasCorrentes['198.234.158-90']);

echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta){
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //['titular' => $titular, 'saldo' => $saldo] = $conta;
    //exibeMensagem("$cpf  {$conta['titular']} \t {$conta['saldo']}");
    exibeContas($conta);
}

echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3><?= $conta['titular']?>; <?=$cpf?></h3>
        </dt>
        <dd>Saldo:<?=  $conta['saldo']?></dd>
        <?php } ?>
    </dl>
</body>
</html>