<?php

//operadores
//consegue entender o tipo de uma variável sem a necessidade de informar previamente (como em c: int soma)
echo "Calculadoura de inteiros:\n";
$soma = "2" + "2";
$sub = 2 - 2.90;
$mult = 2 * 2;
$div = 10 / 3;
$resto = 10 % 3;
$exp = 5 ** 2;

$idade = 20;
$idade_anos = $idade + 10;

$verdadeiro = true;
$falso = false;

echo "Soma: $soma \n";
echo "Subtração: $sub \n";
echo "Multiplicação: $mult \n";
echo "Divisão: $div \n";
echo "Resto: $resto \n";
echo "Exponencial: $exp \n";
echo "Idade mais 10: $idade_anos \n";

//tipagem dinâmica
echo "\n Tipos de dados: \n";
echo gettype($soma) . "\n";
echo gettype($sub) . "\n";
echo gettype($mult) . "\n";
echo gettype($div) . "\n";
echo gettype($resto) . "\n";
echo gettype($exp) . "\n";
echo gettype($idade_anos) . "\n";
echo gettype($verdadeiro) . "\n";
echo gettype($falso) . "\n";

//concatenação
echo "\n Concatenação: \n";
echo 'Minha idade é: ' . $idade . "\n"; //aspas simples não interpretam uma variável, ou caractere especial, de uma string (logo é necessário utilizar concatenação - o php interpretará tudo entre aspas simples como string)
echo "Minha idade é $idade \n"; //aspas duplas fazem essa diferenciação

//caracteres especiais
echo "\n \t Caracteres especiais:";
echo PHP_EOL . "Quebra de linha" . PHP_EOL; //específico de php para quebra de linhas sem uso do \n
echo "\t Tab";
echo "\v vertical tab" . PHP_EOL; //é preferível utilizar PHP_EOL para quebra de linha pois diferentes sistemas operacionais utilisam diferentes formas de caracteres especiais para quebra de linhas (Windows por exemplo: \r\n), logo PHP_EOL abstrai a diferença e pode ser utilizado em qualquer sistema sem problemas
$var_aux = "PHP_EOL";
echo "É preferível utilisar \"$var_aux\" para quebra de linhas" . PHP_EOL;

$idade_alternativa = 21;
echo "Você tem \"$idade_alternativa\" anos";
echo PHP_EOL . PHP_EOL;
echo "Você só pode entrar se tiver mais de 18 anos" . PHP_EOL;
echo "Você tem $idade_alternativa anos, sua entrada é liberada" . PHP_EOL;

