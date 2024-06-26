<?php

namespace Alura\DesignPattern\log;

class SdtOutLogManager extends LogManager
{
    public function criarLogWritter() : LogWritter
    {
        return new StdOutLogWritter();
    }
}