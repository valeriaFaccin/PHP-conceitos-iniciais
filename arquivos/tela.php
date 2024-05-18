<?php

$tela = fopen('php://stderr', 'w');

fwrite($tela,'Olá Mundo!');

fwrite(STDOUT,'Hello World!');

fwrite(STDERR, 'Hola mundo!');