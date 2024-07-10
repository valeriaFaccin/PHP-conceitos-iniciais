<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Ada Lovelace',
    new \DateTimeImmutable('1815-12-10')
);

echo $student->age();
