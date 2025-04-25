<?php

$placaCarro = [
    "LMS-2312" => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    "VXS-7889" => [
        'marca' => 'Ford',
        'modelo' => 'K'
    ],
    "ABC-3213" => [
        'marca' => 'Ferrari',
        'modelo' => '???'
    ]
];

foreach ($placaCarro as $placa => $carro){
    echo "$placa" . ": " . "$carro[marca]" . "\n\t Modelo: " . "$carro[modelo]" . PHP_EOL;
}