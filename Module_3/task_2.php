<?php
// Create an array called $numbers containing the numbers 1 to 10
$numbers = range(1, 10);

// Define a function to remove even numbers from the array
function removeEvenNumbers(&$arr) {
    foreach ($arr as $key => $number) {
        if ($number % 2 == 0) {
            unset($arr[$key]);
        }
    }
}

// Call the function with the $numbers array as an argument
removeEvenNumbers($numbers);

// Print the modified $numbers array
print_r($numbers);
?>
