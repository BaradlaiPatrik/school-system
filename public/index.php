<?php
declare(strict_types=1);
require_once __DIR__ . '/../classroom-data.php';
require_once __DIR__ . '/../src/Model/Student.php';
require_once __DIR__ . '/../src/Model/SchoolClass.php';
require_once __DIR__ . '/../src/Service/Generator.php'; //autoload registerrel szebb lett volna 
use App\Service\Generator;

$classes = Generator::generateClasses(DATA);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Iskolanévsor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Iskolanévsor</h1>

<nav>
    <a href="?all=1">Teljes névsor</a>
    <?php foreach ($classes as $class): ?>
        <a href="?class=<?= $class->getName() ?>"><?= $class->getName() ?></a>
    <?php endforeach; ?>
</nav>
<hr>

<?php
foreach ($classes as $class) {
    if (!isset($_GET['class']) || $_GET['class'] === $class->getName()) {
        echo "<h2>{$class->getName()}</h2>";
        foreach ($class->getStudents() as $student) {
            echo "<p>{$student->getFullName()}</p>";
        }
    }
}
?>
</body>
</html>
