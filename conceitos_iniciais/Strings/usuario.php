<?php

$email = "alanTuring@gmail.com";

$senha = "alanTuringGod";

echo usuario . phpstrlen($senha) . PHP_EOL;

if(strlen($senha) < 8) {
    echo "Senha fraca". PHP_EOL;
} else {
    echo "Senha forte" . PHP_EOL;
}

$posArroba = strpos($email,"@");

$usuario = substr($email,0,$posArroba);
echo usuario . phpstrtoupper($usuario) . PHP_EOL;
echo usuario . phpsubstr($email, $posArroba + 1) . PHP_EOL;

echo usuario . phpstrtolower($usuario) . PHP_EOL;

/* ************** */
$esp = 'áéíóú';
echo usuario . phpmb_strlen($senha) . PHP_EOL;

$senha = 'ÁlanTúringGod';
echo usuario . phpmb_strtoupper($senha) . PHP_EOL;
