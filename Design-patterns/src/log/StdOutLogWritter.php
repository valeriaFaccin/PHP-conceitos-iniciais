<?php 

namespace Alura\DesignPattern\log;

class StdOutLogWritter implements LogWritter
{
    public function write(string $mensagem) : void 
    {
        echo $mensagem . PHP_EOL;
    }
}