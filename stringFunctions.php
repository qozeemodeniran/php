<?php
echo "Returning the string length..."."<br>";
$firstName = "Qozeem";
echo"The length of the word '$firstName' is ".(strlen($firstName));//outputs 6.
echo "<br>";
echo "<br>";
echo "Returning the word count..."."<br>";
$fullName = "Qozeem Odeniran";
echo "The number of words in '$fullName' is ".str_word_count($fullName);
echo "<br>";
echo "<br>";
echo "Returning the reversed word..."."<br>";
$fullName = "Qozeem Odeniran";
echo "The reverse of '$fullName' is ".strrev($fullName);
echo "<br>";
echo "<br>";
echo "String search..."."<br>";
$fullName = "Qozeem Odeniran";
echo "The search result of 'ran' in is '$fullName' is ".strpos($fullName, 'ran');
echo "<br>";
echo "<br>";
echo "Replacing strings..."."<br>";
$fullName = "Qozeem Adeniran";
echo "Replacing 'Ade' with 'Ode' in '$fullName' is ".str_replace('Ade', 'Ode', $fullName);
?>