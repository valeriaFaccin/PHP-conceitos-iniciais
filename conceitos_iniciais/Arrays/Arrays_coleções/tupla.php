<?php

$dados = [
    'nome' => 'Alan Turing', 
    'nota' => 10, 
    'idade' => 41
];
//list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados;
//ou => [$nome, $nota, $idade] = $dados; (a função pega índices numéricos por padrão)

extract($dados); //cria variáveis para os valores de uma lista automaticamente

var_dump($nome, $nota, $idade);

//var_dump(compact('idades', 'nomes', 'notas'));

