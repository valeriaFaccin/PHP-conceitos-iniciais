<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
        //Throwable é o método mais genérico para capturar erros ou exceções, que vem da interface Throwable (outras formar genéricas são: Exception - para capturar apenas exceções, e Error - para capturar apenas erros -- o ideal é sempre detalhar)
    } catch (Throwable $erro){
        //retorna a mensagem da exceção
        echo $erro->getMessage() . PHP_EOL;
        //retorna a linha em que ocorreu a exceção
        echo $erro->getLine() . PHP_EOL;
        //retorna a pilha percorrida pelo programa até o erro
        echo $erro->getTraceAsString() . PHP_EOL;

        //parâmetros: mensagem da exceção, código e exceção anterior
        //throw new RuntimeException('Exceção tratada, lança uma nova', $erro->getCode(), $erro);
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    $div = intdiv(5, 0);
    throw new BadFunctionCallException('Nova exceção a ser tratada');

    /* 
    $array = new SplFixedArray(2);
    $array[3] = 'valor'; */
    
    //var_dump(debug_backtrace());
    //print_r(debug_backtrace());
    //echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
