<?php
declare(strict_types=1);

namespace App\Model;

class Student
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $gender,
        private string $className,
        private array $grades = []
    ) {}

    public function getFullName(): string { return "$this->lastName $this->firstName"; }

    public function getGender(): string { return $this->gender; }

    public function getClassName(): string { return $this->className; }

    public function getGrades(): array { return $this->grades; }
}
