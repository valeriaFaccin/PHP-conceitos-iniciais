<?php 

$notas =[
    [
        'aluno' => 'Pedro',
        'nota' => 8
    ],
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Carlos',
        'nota' => 9
    ]
];

function ordenarNotas(array $notas1, array $notas2) : int 
{
    if($notas1['nota'] > $notas2['nota']){
        return -1;
    }

    if($notas2['nota'] > $notas1['nota']){
        return 1;
    }
    return 0;
}


usort($notas, 'ordenarNotas');
var_dump(($notas));

