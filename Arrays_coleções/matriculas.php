<?php
/*  
$alunos2023 = [
    'Inês Zistente' => 10,
    'Cintia Temas' => 8.5,
    'Roberto' => 9,
    'Carlos Eduardo' => 6,
    'Pedro Progra I' => 7.13,
    'Calastor Culo II' => 2
];*/

$alunos2023 = [
    'Inês Zistente',
    'Cintia Temas',
    'Roberto Newtons', 
    'Carlos Ohm', 
    'Pedro Volts',
    'Camila Kelvin' 
];

$novosAlunos = [
    'Albert Einstein',
    'Alan Turing',
    'Marie Curie', 
    'Pascal', 
    'Ada Lovelace' 
];


echo 'Merge' . PHP_EOL;
$alunos2024 = array_merge($alunos2023, $novosAlunos); //não preserva as chaves (se for string o valor da chave será sobrescrito, se for numérico vai reformular para seguir a sequência)
var_dump($alunos2024);

echo '+' . PHP_EOL;

$alunos2024_2 = ($alunos2023 + $novosAlunos); //nunca sobrescreve os valores
var_dump($alunos2024_2);

echo 'Desempacotamento' . PHP_EOL;
$alunos2024_22 = [...$alunos2023, ...$novosAlunos]; //desempacota os elementos do array, trabalha com seus elementos, é possível adicionar novos elementos ao meio do desempacotamento
var_dump($alunos2024_22);

array_push($alunos2024, 'James Watt', 'Lima Barreto', 'James Prescott Joule', 'Alexandria'); //adicina novos elementos ao final do array
$alunos2024[] = 'Machado de Assis';

array_unshift($alunos2024, 'Isaac Newton'); //adiciona um novo elemento no início da lista
var_dump($alunos2024);

echo array_shift($alunos2024) . PHP_EOL;
echo array_pop($alunos2024_2) . PHP_EOL; //remove o último elemento, retorna o último elemento
