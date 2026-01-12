<?php
declare(strict_types=1);
namespace App\Service;

use App\Model\Student;
use App\Model\SchoolClass;

class Generator {
    public static function generateClasses(array $data): array {
        $classes = [];
        foreach ($data['classes'] as $className) {
            $class = new SchoolClass($className);
            $count = rand(10, 15);

            for ($i = 0; $i < $count; $i++) {
                $gender = rand(0,1) ? 'male' : 'female';
                $first = $gender === 'male'
                ? $data['firstnames']['men'][array_rand($data['firstnames']['men'])]
                : $data['firstnames']['women'][array_rand($data['firstnames']['women'])];
                $last = $data['lastnames'][array_rand($data['lastnames'])];
                $grades = [];
                foreach ($data['subjects'] as $sub) {
                    for ($g=0;$g<rand(0,5);$g++) {
                        $grades[$sub][] = rand(1,5);
                    }
                    }
                    $class->addStudent(new Student($first,$last,$gender,$className,$grades));
            }
            $classes[] = $class;
        }
        return $classes;
    }
}
