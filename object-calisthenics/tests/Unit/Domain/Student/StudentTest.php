<?php

namespace Alura\Calisthenics\Tests\Unit\Domain\Student;

use Alura\Calisthenics\Domain\Address\Address;
use Alura\Calisthenics\Domain\Email\Email;
use Alura\Calisthenics\Domain\Student\{FullName, Student};
use Alura\Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    private Student $student;

    protected function setUp(): void
    {
        $this->student = new Student(
            new Email('email@example.com'),
            new \DateTimeImmutable('1997-10-15'),
            new FullName('Ada', 'Lovelace'),
            new Address(
                'Rua de Exemplo',
                '71B',
                'Meu Bairro',
                'Minha Cidade',
                'Meu estado',
                'Brasil'
            )
        );
    }

    public function testStudentWithoutWatchedVideosHasAccess(): void
    {
        self::assertTrue($this->student->hasAccess());
    }

    public function testStudentInfo(): void
    {
        self::assertEquals('Ada Lovelace', $this->student->getFullName());
        self::assertEquals('email@example.com', $this->student->getEmail());
        self::assertEquals('Rua de Exemplo, 71B, Meu Bairro, Minha cidade, Meu estado, Brasil', $this->student->getAddress());
    }

    public function testFullNameMustBeString(): void
    {
        self::assertEquals('Ada Lovelace', $this->student->getFullName());
    }

    public function testStudentWithFirstWatchedVideoInLessThan90DaysHasAccess(): void
    {
        $date = new \DateTimeImmutable('89 days');
        $this->student->watch(new Video(), $date);

        self::assertTrue($this->student->hasAccess());
    }

    public function testStudentWithFirstWatchedVideoInLessThan90DaysButOtherVideosWatchedHasAccess(): void
    {
        $this->student->watch(new Video(), new \DateTimeImmutable('-89 days'));
        $this->student->watch(new Video(), new \DateTimeImmutable('-60 days'));
        $this->student->watch(new Video(), new \DateTimeImmutable('-30 days'));

        self::assertTrue($this->student->hasAccess());
    }

    public function testStudentWithFirstWatchedVideoIn90DaysDoesntHaveAccess(): void
    {
        $date = new \DateTimeImmutable('-90 days');
        $this->student->watch(new Video(), $date);

        self::assertFalse($this->student->hasAccess());
    }

    public function testStudentWithFirstWatchedVideoIn90DaysButOtherVideosWatchedDoesntHaveAccess(): void
    {
        $this->student->watch(new Video(), new \DateTimeImmutable('-90 days'));
        $this->student->watch(new Video(), new \DateTimeImmutable('-60 days'));
        $this->student->watch(new Video(), new \DateTimeImmutable('-30 days'));

        self::assertFalse($this->student->hasAccess());
    }
}
