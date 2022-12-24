<?php 
// removing all html tags from string

// define the string
$html_string = "<h1>Hello, I am removing all HTML tags from this string.</h1>";
$filtered_html_string = filter_var($html_string, FILTER_SANITIZE_STRING);
echo $filtered_html_string;
?>