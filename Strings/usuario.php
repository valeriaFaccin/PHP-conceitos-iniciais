<?php

$email = "alanTuring@gmail.com";

$senha = "alanTuringGod";

echo strlen($senha) . PHP_EOL;

if(strlen($senha) < 8) {
    echo "Senha fraca". PHP_EOL;
} else {
    echo "Senha forte" . PHP_EOL;
}

$posArroba = strpos($email,"@");

$usuario = substr($email,0,$posArroba);
echo strtoupper($usuario) . PHP_EOL;
echo substr($email,$posArroba + 1) . PHP_EOL;

echo strtolower($usuario) . PHP_EOL;

/* ************** */
$esp = 'áéíóú';
echo mb_strlen($senha) . PHP_EOL;

$senha = 'ÁlanTúringGod';
echo mb_strtoupper($senha) . PHP_EOL;
