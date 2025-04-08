
<?php
// Specify the file name
$fileName = "about_me.txt";

// Content to be written in the file
$name = "Sarvesh Bhardwaj";
$introduction = "Hello, my name is Varun. I live in new delhi,India"
$content = "Name: $name\nIntroduction: $introduction";

// Create and write to the file
if(file_put_contents($fileName, $content)) {
    echo "File '$fileName' has been created successfully!";
} else {
    echo "Failed to create the file.";
}
?>
