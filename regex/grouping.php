<?php 
$sentence = "Hello Qozeem, trust you are doing great. Meet , a friend from college.";
$pattern = "/ze(em)/i";
$search = preg_match($pattern, $sentence);

echo "$search\r\n";
?>