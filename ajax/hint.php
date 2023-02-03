<?php 
ini_set("log_errors", 1);
ini_set("error_log", "/Users/qozeemodeniran/Projects/web/php/error.log");
// arrray of names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Jibril";
$a[] = "Qozeem";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// getting parameter 'q' from URL
$q = $_REQUEST["q"];

$hint = "";

// check all hints from array to see if $q is different from empmty ""
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name) {
        if(stristr($q, substr($name, 0, $len))) {
            if($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// show "no suggestions found" if hint was not found, or correct output values
echo $hint === "" ? "no suggestions found": $hint;
?>