<?php 
$json = '{
    "name": "Qozeem Odeniran",
    "major": "Information Technology",
    "cgpa": 4.0
}';

$object = json_decode($json);

// access decoded values from php object
echo "From PHP Object: " . $object->cgpa . "\r\n";

// loop through the values of a PHP object:
foreach ($object as $obj_key => $obj_val) {
    echo  "Looping from PHP object: " . $obj_key . ": " . $obj_val . "\r\n";
}


$array = json_decode($json, true);

// access decode values from php associative array
echo "From PHP Associative Array: " . $array["name"] . "\r\n";

// loop through the values of a PHP associative array:
foreach ($array as $arr_key => $arr_val) {
    echo "Looping from PHP associative array: " .  $arr_key . ": " . $arr_val . "\r\n";
}
?>