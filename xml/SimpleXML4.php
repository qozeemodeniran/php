<?php 
/** reading the xml file and getting node values */

$xml = simplexml_load_file("../note.xml") or die("Error: Canno create object");

echo "Receipient: " . $xml->to . "\r\n";
echo "Receipient: " . $xml->from . "\r\n";
echo "Subject: " .  $xml->heading . "\r\n";
echo "Body: " . $xml->body . "\r\n";
?>