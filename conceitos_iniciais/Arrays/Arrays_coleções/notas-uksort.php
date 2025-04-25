<?php

$nota = [
    "Maria" => 3,
    'Bruno' => 6,
    'Eduardo' => 1,
    'Joana' => 10,
    'Clarissa' => 8
];

function ordenaArray($nota1, $nota2){
    return $nota1 <=> $nota2;
}

uksort($nota,'ordenaArray');
var_dump($nota);