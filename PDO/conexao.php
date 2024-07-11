<?php

require_once './vendor/autoload.php';

$caminho = __DIR__ . '/banco.sqlite';
$banco = new PDO('sqlite:' . $caminho);

echo 'Conexão';

$banco->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)');