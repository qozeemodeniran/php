<?php
/** getting the attribute values */
$xml=simplexml_load_file("../books.xml") or 
die("Error: Cannot create object");
echo "Book Title: " .  $xml->book[0]['category'] . "\r\n";
echo "Book Language: " .  $xml->book[1]->title['lang'] . "\r\n";
?>
