<?php

$notas = [
    'Ana' => 10,
    'Maria' => 8,
    'Roberto' => 9,
    'Carlos Eduardo' => 5,
    'José de Almeida dos Santos' => 7
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "É array" . PHP_EOL;
} else {
    echo "Não é array" . PHP_EOL;
}

echo type_array . phpgettype($notas) . PHP_EOL;

type_array . phpvar_dump(array_is_list($notas)) . PHP_EOL; //retorna falso pois não é um array numérico (com chaves numéricas)
type_array . phpvar_dump(krsort($notas)) . PHP_EOL; //resposta bool(true) - função krsort sempre retorna true

$numeros = [
    'um',
    'dois',
    'três'
];
type_array . phpvar_dump(array_is_list($numeros)) . PHP_EOL;
type_array . phpvar_dump(array_is_list($numeros)) . PHP_EOL; //retorna true pois é um array numérico (todas as chaves são sequenciais começando do 0)

$numeros1 = [
    0 => 'um',
    1 => 'dois',
    2 => 'três'
];
type_array . phpvar_dump(array_is_list($numeros)) . PHP_EOL; //retorna true mesmo se as chaves forem definidas pelo usuário, contanto que sejam chaves sequenciais, sem pular números, a partir do 0

/* 
$numeros1 = [
    'um',
    1 => 'dois',
    'três'
]; 
Outro formato possível pois o php completa as chaves, resposta: bool(true)
*/