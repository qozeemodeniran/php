<?php
$file = fopen("../document3.txt", "a") or die("Unabe to open or write to file");

$attach1 = "Ahmed gave birth to Jibril and Neema\n";
fwrite($file, $attach1);

$attach2 = "Azeez gave birth to Mustakeem\n";
fwrite($file, $attach2);

echo "  File successfully updated";

fclose($file);
?>