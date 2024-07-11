<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$database = new PDO('sqlite:' . $databasePath);

$statement = $database->query('SELECT * FROM students;');
//var_dump($statement->fetchAll());

$studentList = $statement->fetchAll();

echo $studentList[0][1];
