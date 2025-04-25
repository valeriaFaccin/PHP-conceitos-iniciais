<?php

$name = 'Alan Turing';
echo "The creator of Turing Machine is $name\n";

$nota1 = 3;
$nota2 = 7;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Média de notas: $media\n";

$metros = $argv[1] ?? 3;
$cm = $metros * 100;
echo "$metros metros são $cm centímetros\n";

//

$notas = [10, 5, 3, 6, 2, 8];

foreach ($notas as $nota) {
    if($nota < 6) {
        echo "Aluno reprovado\n";
    } else {
        echo "Aluno aprovado\n";
    }
}

$conta = [
    'nomeTitular' => 'Ada Lovelace',
    'saldo' => 25000
];

echo $conta['nomeTitular'] . ' ' . $conta['saldo'];

