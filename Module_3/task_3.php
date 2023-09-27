<?php
// Create an array called $grades with the given values
$grades = [85, 92, 78, 88, 95];

// Define a function to sort the array in descending order
function sortGradesDescending($arr) {
    // Use the arsort() function to sort the array in descending order
    arsort($arr);
    return $arr;
}

// Call the function with the $grades array as an argument
$sortedGrades = sortGradesDescending($grades);

// Print the sorted grades as an array
print_r($sortedGrades);
?>
