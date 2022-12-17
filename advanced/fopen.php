<?php 
// open file or die if file not exist
$open = fopen("../document.txt", "r") or die("Unable to open file, or file does not exist");

echo fread($open, filesize("../document.txt"));

// close file
fclose($open);
?>