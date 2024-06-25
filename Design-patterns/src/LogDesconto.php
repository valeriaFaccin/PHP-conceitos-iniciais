<?php

namespace Alura\DesignPattern;

class LogDesconto {
    public function informarDesconto(float $desconto): void 
    {
        //biblioteca log
        echo "Salvando log de desconto: $desconto" . PHP_EOL;
    }
}