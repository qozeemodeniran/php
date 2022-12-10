<?php 
// define sentence
$sentence = "I majored in Computer Science, and Information Technolgy during my Undegrade and Graduate degrees respectfully. Hence, I would love to work with company as a Software Engineer.\r\n";

// create a seacrh pattern
$pattern = "/company/i";

// seearch the sentence and replace pattern with another string
$search = preg_replace($pattern, "Amazon", $sentence);

echo "\r\n$search\r\n";
?>