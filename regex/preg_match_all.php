<?php 
// define a sentence
$sentence = "My name is Qozeem odeniran. Do you mind telling me your name? I just want to be a friend.";

// create a case-insensitive search pattern
$pattern = "/ame/i";

// regex to count the occurrence of pattern in defined sentence
$search = preg_match_all($pattern, $sentence);

// echo result
echo "$search\r\n";
?>