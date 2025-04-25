<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$database = ConnectionCreator::createConnection();

$student = new Student(
    null,
    'Ada Lovelace',
    new \DateTimeImmutable('1815-12-10')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date)";

$statement = $database->prepare($sqlInsert);

//bindValue passa um valor como parâmetro, bindParam passa uma referência
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if($statement->execute()) {
    echo "Student inserted!";
}

//echo $databaseInsert;
//var_dump($database->exec($sqlInsert));