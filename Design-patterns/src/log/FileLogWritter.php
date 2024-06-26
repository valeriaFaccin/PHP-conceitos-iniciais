<?php

namespace Alura\DesignPattern\log;

class FileLogWritter implements LogWritter
{
    private $arquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function write(string $mensagem): void
    {
        fwrite($this->arquivo, $mensagem . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}