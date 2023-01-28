<?php 
/** looping through the attribute values */
$xml=simplexml_load_file("../books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo "Book Language: " .  $books->title['lang'];
  echo "\r\n";
}

?>