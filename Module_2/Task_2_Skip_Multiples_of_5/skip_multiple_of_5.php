<?php
echo "<b><u>Output: numbers from 1 to 50 with multiples of 5 skipped.</u></b><br>";

for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 == 0) {
        // Skip this iteration and continue to the next number
        continue;
    }
    
    // Print the number
    echo $i . "<br>";
}

// Output will be numbers from 1 to 50 with multiples of 5 skipped
?>