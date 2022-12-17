<?php
$file = fopen("../document3.txt", "w") or die("Unable to create/open file");

$content1 = "Ahmed Odeniran\n";
fwrite($file, $content1);

$content2 = "Azeezat Odeniran\n";
fwrite($file, $content2);

$content3 = "Azeez Odeniran\n";
fwrite($file, $content3);

$content4 = "Qozeem Odeniran\n";
fwrite($file, $content4);

echo "File succesfully created and written to!\n";

fclose($file);
?>