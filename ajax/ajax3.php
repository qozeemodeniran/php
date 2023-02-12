<?php 
ini_set("log_errors", 1);
ini_set("error_log", "error.log");

$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}

// The code performs the following tasks:

//   Sets two ini configuration options:
//   "log_errors" is set to 1, which means that errors will be logged to the file specified by "error_log".
//   "error_log" is set to "error.log", which means that errors will be logged to a file named "error.log".
//   Retrieves the value of the "q" parameter from the URL. The value of "q" represents the artist name being searched for.
  
//   Loads the XML document "cd_catalog.xml" into a DOMDocument object.
  
//   Searches for all elements in the XML document with the tag name "ARTIST". The result is stored in a DOMNodeList object.
  
//   Loops through the elements in the DOMNodeList and checks if the value of the first child node of each element is equal to the artist name being searched for. If a match is found, the parent node of the matching element is stored in a variable "y".
  
//   Gets all the child nodes of the parent node stored in "y". The result is stored in a DOMNodeList object.
  
//   Loops through the elements in the DOMNodeList and outputs the name of each element node and its value, separated by a colon and a space. A line break is added after each element to separate the values.
  
//   Note that this code assumes that the XML document is properly formatted and contains elements with the tag names specified. If there are any issues with the XML document, the code may produce errors or unexpected results.
?>