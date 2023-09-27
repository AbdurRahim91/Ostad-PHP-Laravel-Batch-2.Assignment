<?php
// Create a multidimensional array called $studentGrades
$studentGrades = [
    // Student 1
    [
        'Math' => 85,
        'English' => 92,
        'Science' => 78,
    ],
    // Student 2
    [
        'Math' => 88,
        'English' => 95,
        'Science' => 90,
    ],
    // Student 3
    [
        'Math' => 75,
        'English' => 80,
        'Science' => 85,
    ],
];

// Define a function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $studentIndex => $student) {
        $total = 0;
        foreach ($student as $subject => $grade) {
            $total += $grade;
        }
        $average = $total / count($student);
        echo "Student " . ($studentIndex + 1) . " - Average Grade: " . $average .'<br>';
    }
}

// Call the function with the $studentGrades array as an argument
calculateAverageGrades($studentGrades);
?>
