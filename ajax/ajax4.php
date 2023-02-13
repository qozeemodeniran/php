<?php 
ini_set("log_errors", 1);
ini_set("error_log", "error.log");

$xml = new DOMDocument();
$xml->load("../links.xml");

$x = $xml->getElementsByTagName('link');

// get the q parameter from URL
$q = $_GET["q"];

// lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    for($i=0; $i<($x->length); $i++) {
        $y=$x->item($i)->getElementsByTagName('title');
        $z=$x->item($i)->getElementsByTagName('url');
        if($y->item(0)->nodeType==1) {
            // find a link matching search term
            if(stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)) {
                if($hint=="") {
                    $hint="<a href='" .
                    $z->item(0)->childNodes->item(0)->nodeValue .
                    "' target='_blank'>" .
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    $hint=$hint . "<br /><a href='" .
                    $z->item(0)->childNodes->item(0)->nodeValue .
                    "' target='_blank'>" .
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

// set output to "no hint found: change search term(s)" if no hint found, or to correct values
if($hint=="") {
    $response="No hint found: change search term(s)";
} else {
    $response=$hint;
}

// output response
echo $response;
?>