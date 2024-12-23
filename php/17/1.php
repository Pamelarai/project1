<?php
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "Diana" => 88,
    "Evan" => 74
];
$totalGrades = 0;
$numberOfStudents = count($students);
foreach ($students as $name => $grade) {
    $totalGrades += $grade;
}
$averageGrade = $totalGrades / $numberOfStudents;
echo "The average grade is: " . number_format($averageGrade, 2);
?>
