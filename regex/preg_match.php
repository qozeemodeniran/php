<?php 
// define a string
$sentence = "My name is Qozeem Odeniran";

// create a case-insensitive search pattern
$pattern = "/Qozeem/i";

// search the for pattern in string
$search = preg_match($pattern, $sentence);

// echo result
echo "$search\r\n";
?>