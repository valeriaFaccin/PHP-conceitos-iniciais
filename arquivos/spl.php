<?php

$arquivoCurso = new SplFileObject('cursos.csv', 'r');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivoCurso->getCTime());

echo $data->format('d/m/Y');