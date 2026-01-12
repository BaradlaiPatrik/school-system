<?php
declare(strict_types=1);
namespace App\Model;

class Student {
    private string $firstName;
    private string $lastName;
    private string $gender;
    private string $className;
    private array $grades;

    public function __construct(
        string $firstName,
        string $lastName,
        string $gender,
        string $className,
        array $grades
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->className = $className;
        $this->grades = $grades;
    }

    public function getFullName(): string {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function getGrades(): array {
        return $this->grades;
    }
}
