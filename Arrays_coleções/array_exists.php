<?php

$notas = [
    'Ana' => 10,
    'Maria' => 8,
    'Roberto' => 9,
    'Carlos Eduardo' => 5,
    'José de Almeida dos Santos' => 7,
    'Marcos' => null
];

echo "Ana fez a prova: (array_key_exists)" . PHP_EOL;
var_dump(array_key_exists('Ana', $notas)); //verifica se existe a chave 'Ana', independente do seu valor
echo "Marcos fez a prova: (isset) " . PHP_EOL;
var_dump(isset($notas['Marcos'])); //verifica se a chave Marcos existe e é diferente de nulo

echo "Alguèm tirou 10?"  . PHP_EOL;
var_dump(in_array("10", $notas, true)); //verifica se o valor passado no parâmetro existe no array passado. 
//true pertence ao terceiro parâmetro de in_array (strict), compara o tipo do parâmetro com o do valor, evitando a conversão de srt para int e retorna false

echo "Quem tirou 10?"  . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;//busca a chave do valor informado