<?php

namespace Alura\Solid\Model;

class Video implements Assistivel
{
    protected bool $assistido = false;
    protected string $nome;
    protected \DateInterval $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = \DateInterval::createFromDateString('0');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->nome]);
    }
}
