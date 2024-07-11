<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$database = new PDO('sqlite:' . $databasePath);

$student = new Student(
    null,
    'Alan Turing',
    new \DateTimeImmutable('1815-12-10')
);

$databaseInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

//echo $databaseInsert;
var_dump($database->exec($databaseInsert));