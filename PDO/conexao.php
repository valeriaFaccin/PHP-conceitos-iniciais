<?php

require_once './vendor/autoload.php';

$caminho = __DIR__ . '/banco.sqlite';
$banco = new PDO('sqlite:' . $caminho);

echo 'Conexão';