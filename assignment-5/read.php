<?php
// Define the file path
$file_path ='file_name.txt';

// Check if the file exists
if (!file_exists($file_path)) {
    // Create the file and write the content to it
    $content = "Hello! I'm Abdur Rahim. You are most welcome to my PHP & Laravel Coding";
    
    // Attempt to open the file for writing
    $file = fopen($file_path, 'w');

    if ($file) {
        // Write the content to the file
        fwrite($file, $content);

        // Close the file
        fclose($file);

        echo "File created and content written successfully.";
    } else {
        echo "Error: Unable to create or write to the file.";
    }
} else {
    // File already exists, so read and display its content
    // Attempt to open the file for reading
    $file = fopen($file_path, 'r');

    if ($file) {
        // Read the content of the file
        $content = fread($file, filesize($file_path));

        // Close the file
        fclose($file);

        // Display the content on the webpage
        echo "<pre>" . $content . "</pre>"; // Use <pre> tag for preserving line breaks
    } else {
        echo "Error: Unable to open the file for reading.";
    }
}
?>
