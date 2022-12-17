<?php 
$file = fopen("../document.txt", "r") or die("Unable to open file"); 
echo fgets($file);
fclose($file);
?>
