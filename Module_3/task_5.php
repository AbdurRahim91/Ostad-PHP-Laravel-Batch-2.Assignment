<?php
// Define the generatePassword function
function generatePassword($length) {
    // Define the character sets for lowercase letters, uppercase letters, numbers, and special characters
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    // Combine all character sets
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;
    
    // Initialize the password variable
    $password = '';

    // Get the total number of characters in $allChars
    $charCount = strlen($allChars);

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random index within the range of $allChars
        $randomIndex = rand(0, $charCount - 1);

        // Append the randomly selected character to the password
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $password . PHP_EOL;
?>
