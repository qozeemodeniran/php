<?php 
$arr1 = array(
    "name" => "Qozeem Odeniran",
    "major" => "Information Technology",
    "cgpa" => 4.0
);

$arr2 = array("Qozeem Odeniran", "Information Technology", 4.0);


echo json_encode($arr1) . "\r\n";

// encode indexed array to JSON array
echo json_encode($arr2) . "\r\n";
?>