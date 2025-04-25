<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo): void
    {
        $conteudo->assistir();
    }

//    public function assisteCurso(Curso $curso): void
//    {
//        foreach ($curso->recuperarVideos() as $video) {
//            $video->assistir();
//        }
//    }
//
//    public function assisteAluraMais(AluraMais $aluraMais): void
//    {
//        $aluraMais->assistir();
//    }
}
