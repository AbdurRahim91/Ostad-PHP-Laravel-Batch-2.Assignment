<?php
function printFibonacciSeries($count) {
    // Initialize the first two Fibonacci numbers
    $first = 0;
    $second = 1;
    
    // Print the first two Fibonacci numbers
    echo $first . " " . $second . " ";
    
    // Loop to calculate and print the next Fibonacci numbers
    for ($i = 2; $i < $count; $i++) {
        // Calculate the next Fibonacci number
        $next = $first + $second;
        
        // Print the next Fibonacci number
        echo $next . " ";
        
        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
$count = 15;
printFibonacciSeries($count);
?>