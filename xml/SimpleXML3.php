<?php 
/**
 * use simplexml_load_file() method to read the xml data from a file
 */
$xml = simplexml_load_file("../note.xml") or die("Error: Cannot create object");

print_r($xml);
?>