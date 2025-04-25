<?php

namespace Alura\Pdo\Domain\Repository;

interface StudentRepository
{
    public function allStudents(): array;
    public function StudensBithAt(\DateTimeInterface $birthDate): array;
    public function addStudent(Student $student): bool;
    public function remvStudent(Student $student): bool;
}
