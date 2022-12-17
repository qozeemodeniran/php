<?php
$file = fopen("../document.txt", "r") or die("Unable to  open file");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>