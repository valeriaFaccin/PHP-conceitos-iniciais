<?php

namespace Alura\DesignPattern\log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter() : LogWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}