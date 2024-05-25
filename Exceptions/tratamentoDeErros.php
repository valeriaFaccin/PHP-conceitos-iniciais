<?php

//reporta todos os erros encontrados no arquivo
error_reporting(E_ALL);
//exibe os erros
ini_set('display_errors', 1);
//log dos erros
ini_set('log_errors',1);
//caminho escolhido para o log do erro
ini_set('erro_log','/caminho/escolhido');

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo 'Aviso: isso é perigoso' . PHP_EOL;
            break;
        case E_NOTICE:
            echo 'Melhor não fazer isso' . PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[11];

//echo CONSTANT;
