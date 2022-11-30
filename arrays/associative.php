<?php
// define associative array
$array = array("name"=>"Qozeem Odeniran", "age"=>28, "major"=>"IT");

// echo array elements
echo "My name is " . $array["name"];
echo "\r\n";
echo "I am " . $array["age"] . " years old";
echo "\r\n";
echo "I am currently majoring in " . $array["major"];

echo "\r\n";
echo "\r\n";
// looping through the associative array using foreach-loop
echo "-----looping through the associative array using foreach-loop-----\r\n";

foreach ($array as $key => $value) {
    echo "key:  " . $key . " |  value: " . $value;
    echo "\r\n";
}
?>
