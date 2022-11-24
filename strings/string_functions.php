<?php 

$name = "Qozeem Banji Odeniran";

// count the number of strings
echo strlen($name);
echo "<br />";

// count the number of words in a string
echo str_word_count($name);
echo "<br />";

// reverse the strings
echo strrev($name);
echo "<br />";

// search for Odeniran in $name
echo strpos($name, "Odeniran");
echo "<br />";

// replace "Banji" with "Oluwabamiji" in $name
echo str_replace("Banji", "Oluwabamiji", $name);
echo "<br />";

?>