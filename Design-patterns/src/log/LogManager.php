<?php

namespace Alura\DesignPattern\log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem) : void
    {
        /** @var LogWritter logWritter */
        $logWritter = $this->criarLogWritter();

        $data = date('d/m/Y');
        $mensagemFinal = "[$data][$severidade]: [$mensagem]";
        $logWritter->write($mensagemFinal);

    }

    abstract public function criarLogWritter() : LogWritter;
}