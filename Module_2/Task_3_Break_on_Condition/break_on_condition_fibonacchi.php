<?php
// Initialize the first two Fibonacci numbers
$first = 0;
$second = 1;

// Print the first two Fibonacci numbers
echo $first . " " . $second . " ";

// Initialize a counter to keep track of the number of Fibonacci numbers printed
$count = 2;

// Loop to calculate and print the next Fibonacci numbers
while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $first + $second;
    
    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        // Break out of the loop
        break;
    }
    
    // Print the next Fibonacci number
    echo $next . " ";
    
    // Update variables for the next iteration
    $first = $second;
    $second = $next;
    
    // Increment the counter
    $count++;
}
?>