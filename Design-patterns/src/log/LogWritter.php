<?php

namespace Alura\DesignPattern\log;

interface LogWritter 
{
    public function write(string $mensagem) : void;
}