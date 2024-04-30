<?php 

$notas =[
    10,
    7,
    9,
    6,
    8,
    3
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Notas Desordenadas";
var_dump(($notas));

echo "Notas Ordenadas";
var_dump(($notasOrdenadas));
