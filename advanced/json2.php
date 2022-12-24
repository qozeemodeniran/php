<?php 
$json = '{
    "name": "Qozeem Odeniran",
    "major": "Information Technology",
    "cgpa": 4.0
}';

// decode json  into php object: returns object by default, but when a second parameter is set to true, it returms an associative array
var_dump(json_decode($json, true));
?>