<?php

function sacar($conta, $valor){
    if($valor > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar($conta, float $valor){
    if($valor > 0){
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem($mensagem){
    echo "$mensagem" . '<br>';
}

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeContas(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}