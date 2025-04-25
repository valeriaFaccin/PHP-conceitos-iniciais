<?php 

$notas =[
    10,
    7,
    9,
    6,
    8,
    3
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Notas Desordenadas" . PHP_EOL;
var_dump(($notas));

echo "Notas Ordenadas" . PHP_EOL;
var_dump(($notasOrdenadas));


$notas2 = [
    'Ana' => 10,
    'Maria' => 8,
    'Roberto' => 9,
    'Carlos Eduardo' => 5,
    'José de Almeida dos Santos' => 7
];

echo "Notas 2 chave + ordem crescente" . PHP_EOL;;
asort($notas2); //a(assossiative)sort = mantem as chaves do array ao ordenar
var_dump($notas2);

echo "Notas 2 chave + ordem decrescente" . PHP_EOL;;
arsort($notas2); //mantem as chaves e ordena de forma decrescente
var_dump($notas2);

echo "Notas 2 chave + ordem alfabética (a-z)" . PHP_EOL;;
ksort($notas2); //k(key)sort = mantem as chaves e ordena de forma alfabética (a-z)
var_dump($notas2);

echo "Notas 2 chave + ordem alfabética (z-a)" . PHP_EOL;;
krsort($notas2); //mantem as chaves e ordena de forma alfabética (z-a)
var_dump($notas2);

echo "Notas 2 decrescente" . PHP_EOL;;
rsort($notas2); //ordena de forma decrescente
var_dump($notas2);

echo "Notas 2 crescente" . PHP_EOL;;
sort($notas2);
var_dump($notas2);
