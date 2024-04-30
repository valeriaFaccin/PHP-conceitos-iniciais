<?php 

$idadeList = [19, 30, 20, 34, 67, 11, 22];

$idadeList[7] = 25;
$idadeList[] = 42;
$idadeList[count($idadeList)] = 51;

for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

$nomeList = array('Pedro', 'José', 'Maria', 'Ana', 'Bianca');

for($i = 0; $i < count($nomeList); $i++){
    echo $nomeList[$i] . PHP_EOL;
}

list($idadeMaria, $idadePedro, $idadeJose, $idadeAna, $idadeBianca) = $idadeList;