<?php
$idade = 19;
$numPessoas = 1;
echo "Você só pode entrar sendo maior de 18 anos ou maior de 16 com acompanhante" . PHP_EOL;

$mensagem = $idade > 18 ? "Sua entrada é liberada" : "Sua entrada não é liberada";
echo $mensagem . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade" . PHP_EOL . "Sua entrada é liberada" . PHP_EOL;
} else 
    if ($idade >= 16 && $numPessoas > 1) {
        echo "Você tem $idade e está com acompanhante". PHP_EOL . "Sua entrada é liberada" . PHP_EOL;
    } else {
        echo "Você tem $idade". PHP_EOL . "Sua entrada não é liberada" . PHP_EOL;
    }

echo "Adeus!" . PHP_EOL;