<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\{Pontuavel};

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo): float|int
    {
        return $conteudo->recuperarPontuacao();
//        if ($conteudo instanceof Curso) {
//            return 100;
//        } else if ($conteudo instanceof AluraMais) {
//            return $conteudo->minutosDeDuracao() * 2;
//        } else {
//            throw new \DomainException('Apenas Cursos e videos Alura+ possuem pontuações');
//        }
    }
}
