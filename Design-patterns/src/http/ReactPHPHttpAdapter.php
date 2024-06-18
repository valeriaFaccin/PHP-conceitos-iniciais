<?php

namespace Alura\DesignPattern\http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []) : void
    {
        //instancia React PHP, prepara os dados e faz a requisição
        echo "React PHP" . PHP_EOL;
    }
}