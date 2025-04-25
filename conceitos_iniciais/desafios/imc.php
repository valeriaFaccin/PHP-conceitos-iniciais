<?php

$peso = 110;
$altura = 1.70;

if ($peso/($altura**2) > 40){
    echo "Obesidade grau III" . PHP_EOL;
} else if ($peso/($altura**2) >= 35){
    echo "Obesidade grau II" . PHP_EOL;
} else if ($peso/($altura**2) >= 30){
    echo "Obesidade grau I" . PHP_EOL;
} else if ($peso/($altura**2) >= 25){
    echo "Acima do peso" . PHP_EOL;
} else if ($peso/($altura**2) >= 18.5){
    echo "Peso normal" . PHP_EOL;
} else if ($peso/($altura**2) >= 17){
    echo "Abaixo do peso" . PHP_EOL;
} else {
    echo "Muito abaixo do peso" . PHP_EOL;
}