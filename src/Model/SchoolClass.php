<?php
declare(strict_types=1);
namespace App\Model;

class SchoolClass {
    private string $name;
    private array $students = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function addStudent(Student $student): void {
        $this->students[] = $student;
    }

    public function getStudents(): array {
        return $this->students;
    }

    public function getName(): string {
        return $this->name;
    }
}
