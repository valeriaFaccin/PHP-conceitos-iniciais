<?php

$contasCorrentes = [
    '123.456.782-12' => [
        'titular' => 'Pedro',
        'saldo'=> 1000
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

$contasCorrentes[] = [
    'titular' => 'Joana',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Eduardo',
    'saldo' => 12000
];

$contasCorrentes['323.987.456-11'] = [
    'titular' => 'Fabiano',
    'saldo' => 2200
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}

//echo $contasCorrentes[12345678212]['titular'] . PHP_EOL;
