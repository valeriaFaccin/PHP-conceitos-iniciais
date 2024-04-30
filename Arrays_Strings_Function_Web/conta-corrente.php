<?php
//array associativo sempre define elementos composto de chave(índice explicíto - int ou string) => valor(primitivo ou array)
$conta1 = [
    'titular' => 'Pedro',
    'saldo'=> 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Bernardo',
    'saldo' => 5000
];

echo "$conta1[titular]" . PHP_EOL;

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}
