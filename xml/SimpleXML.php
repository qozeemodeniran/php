<?php 
$data = 
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Qozeem</to>
<from>Jibril</from>
<heading>Greetings</heading>
<body>Hello Qozeem, Hope you are having a great weekend.</body>
</note>";

/**
 * read XML data from string using the simplexml_load_string() method.
 */
$xml = simplexml_load_string($data) or die("Error: Cannot create object");

print_r($xml);
?>