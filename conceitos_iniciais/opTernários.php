<?php

$a = 1;
$b = 1;
/*$mensagem = $a == $b ? "a é igual em valor que b":"a não é igual em valor que b";
$mensagem = $a === $b ? "a é igual em valor e tipo que b":"a não é igual em valor e tipo que b";
$mensagem = $a != $b ? "a não é igual em valor que b":"a é igual em valor que b";
$mensagem = $a <> $b ? "a não é igual em valor que b":"a é igual em valor que b";
$mensagem = $a !== $b ? "a é igual em valor ou tipo que b":"a é igual em valor ou tipo que b";
$mensagem = $a < $b ? "a é menor que b":"a não é menor que b";
$mensagem = $a > $b ? "a é maior que b":"a não é maior que b";
$mensagem = $a <= $b ? "a é menor igual que b":"a não é menor igual que b";
$mensagem = $a >= $b ? "a é maior igual que b":"a não é maior igual que b";*/
$mensagem = $a <=> $b ? "a é menor que, igual a ou maior que b, respectivamente":"a não é menor que, igual a ou maior que b, respectivamente";

echo $mensagem . PHP_EOL;