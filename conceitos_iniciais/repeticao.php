<?php
echo "Sequência crescente:" . PHP_EOL;
$numAlunos = 15;
$contador = 0;
while ($contador < $numAlunos) {
    $contador++;
    echo "#$contador" . PHP_EOL;
}


echo "Sequência decrescente:" . PHP_EOL;
for($contador = 15; $contador > 0; $contador--){
    echo "#$contador" . PHP_EOL;
}


echo "Sequência múltiplos de 5:" . PHP_EOL;
for($contador = 0; $contador <= 50; $contador++){
    if ($contador % 5 == 0) {
        echo "#$contador" . PHP_EOL;
    }
}


echo "Soma acumulada:" . PHP_EOL;
$num = 20;
$aux = 0;
$contador = 0;
while ($contador <= $num) {
    $aux += $contador;
    echo "#$contador" . PHP_EOL;
    $contador++;
}


echo "Sequência 4 em 4:" . PHP_EOL;
$num = 20;
$contador = 0;
do {
    $contador += 4;
    echo "#$contador" . PHP_EOL;
} while ($contador < $num);


echo "Sequência 5 em 5:" . PHP_EOL;
$numero = 50;
for($cont = 1; $cont <= $numero; $cont++){
    if($cont % 5 != 0){
        continue;
    }
    echo "#$cont" . PHP_EOL;
}


echo "Sequência até 7:" . PHP_EOL;
$numero = 10;
for($cont = 1; $cont <= $numero; $cont++){
    if($cont == 7){
        break;
    }
    echo "#$cont" . PHP_EOL;
}

