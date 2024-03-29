<?php 
// We want to initialize the XML parser, load the xml, and output it:

$doc = new DOMDocument();
$doc->load("../note.xml");

// print $doc->saveXML();

/**
 * The example above creates a DOMDocument-Object and loads the XML from "note.xml" into it.
 * Then the saveXML() function puts the internal XML document into a string, so we can output it.
 */

// We want to initialize the XML parser, load the XML, and loop through all elements of the <note> element:

$x = $doc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>