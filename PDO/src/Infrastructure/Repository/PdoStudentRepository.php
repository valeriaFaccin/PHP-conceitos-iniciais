<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    //constructor da conexão com o banco sqlite
    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    /**
     * @return array
     *
     * Returns all the sturdents stored in an array
     * SELECT * FROM students;
     */
    public function allStudents(): array
    {
        $studentsList = [];
        $statement = $this->connection->query('SELECT * FROM students;');
        $studentsAll = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($studentsAll as $student){
            $studentsList[] = new Student($student['id'], $student['name'], $student['birth_date']);
        }
        return $studentsList;
    }

    public function StudensBithAt(\DateTimeInterface $birthDate): array
    {
        $studentsList = [];
        $statement = $this->connection->query('SELECT * FROM students WHERE BirthDate = :birthDate;');
        $statement->bindValue('birthDate', $birthDate);
        $studentsAll = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($studentsAll as $student){
            $studentsList[] = new Student($student['id'], $student['name'], $student['birth_date']);
        }
        return $studentsList;
    }

    public function addStudent(Student $student): bool
    {
        $statement = $this->connection->query('INSERT INTO students(id, name, birth_date) VALUES({$student->id()}, $student->name(), $student->birth_date());');
        if ($statement) {
            return true;
        }
        return false;
    }

    public function remvStudent(Student $student): bool
    {
        $studentList = [];
        $statement = $this->connection->query('DELETE FROM students WHERE id = $student->id();');
        if($statement->execute()){
            return true;
        }
        return false;
    }
}