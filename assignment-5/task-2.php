<?php
$file_path = 'my_file.txt';
$data = "Hello! I'm Abdur Rahim. You are most welcome to my PHP & Laravel Coding.";

// Open the file in append mode
$file = fopen($file_path, 'a');

if ($file) {
    // Write the data to the file
    fwrite($file, $data . PHP_EOL); // PHP_EOL is used to add a new line

    // Close the file
    fclose($file);

    echo "Data appended to the file successfully.";
} else {
    echo "Error: Unable to open the file for appending.";
}
?>