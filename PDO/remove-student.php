<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$prepStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$prepStatement->bindValue(1, 3, PDO::PARAM_INT);
var_dump($prepStatement->execute());
