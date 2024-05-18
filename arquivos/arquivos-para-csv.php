<?php

$cursos = file('cursos.txt');

$meus_cursos = file('text.txt');

$arquivosCsv = fopen('cursos.csv','w');

foreach ($cursos as $cur) {
    $linha = [($cursos), 'Sim'];

    fputcsv(utf8_decode($arquivosCsv), $linha, ';');
}

foreach ($meus_cursos as $cur) {
    $linha = [($cursos), 'Não'];

    fputcsv(utf8_decode($arquivosCsv), $linha, ';');
    //fputcsv(mb_convert_encoding($arquivosCsv, 'Windows-1252', 'UTF-8'), $linha, ';');
}

fclose($arquivosCsv);