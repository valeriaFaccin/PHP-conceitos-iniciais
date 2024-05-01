<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Maria' => 8,
    'Roberto' => 9,
    'Carlos Eduardo' => 5,
    'José de Almeida dos Santos' => 7,
    'Marcos' => 0
];

$notasBimestre2 = [
    'Ana' => 10,
    'Maria' => 9,
    'Roberto' => 7,
    'Carlos Eduardo' => 8,
    'José de Almeida dos Santos' => 7,
    'Marcos' => 9
];

//var_dump(array_diff($notasBimestre1, $notasBimestre2)); -- diferença entre os arrays considerando apenas valor
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); -- diferença entre os arrays considerando apenas chave

$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2); //diferença entre dois arrays considerando chave e valor
echo "Alunos Faltantes" .PHP_EOL;
var_dump(array_keys($alunosFaltantes));
echo "Nota dos alunos faltantes" . PHP_EOL;
var_dump(array_values($alunosFaltantes));

echo "Troca do valor para chave, e da chave para o valor". PHP_EOL;
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos)); //combina dois arrays do mesmo tamanho
echo "Array flip". PHP_EOL;
var_dump(array_flip($alunosFaltantes)); // o que é valor vira chave e o que é chave vira valor

