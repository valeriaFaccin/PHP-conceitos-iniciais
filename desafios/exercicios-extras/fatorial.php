<?php

function fatorial(int $numero) : int
{
    if($numero <= 0){
        return 1;
    }
    return fatorial($numero -1) * $numero;
}

echo fatorial(5) . PHP_EOL;
