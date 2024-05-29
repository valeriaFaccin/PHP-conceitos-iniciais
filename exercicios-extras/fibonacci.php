<?php

$numero = 10;
$aux = 0;
for($i = 1; $i <= $numero; $i++){
    echo $aux . PHP_EOL;
    $aux += $i-1;
}
