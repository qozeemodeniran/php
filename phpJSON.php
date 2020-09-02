<?php
//This example shows how to encode an associative array into a JSON object
$age = array("Ahmed"=>32, "Azeezat"=>30, "Azeez"=>28, "Qozeem"=>26);
echo json_encode($age);
echo "<br><br>";

//This example shows how to encode an indexed array into a JSON array:
$artiste = array("Brymo", "Asa", "Burna-Boy", "Kizz Daniel");
echo json_encode($artiste);	
echo "<br><br>";

//The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
$jsonobj = '{"Ahmed":32,"Azeezat":30,"Azeez":28,"Qozeem":26}';
var_dump(json_decode($jsonobj));
echo "<br><br>";

//The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
//This example decodes JSON data into a PHP associative array:
$jsonobj = '{"Ahmed":32,"Azeezat":30,"Azeez":28,"Qozeem":26}';
var_dump(json_decode($jsonobj,true));
echo "<br><br>";

//Accessing values from objects...
$jsonobj = '{"Ahmed":32,"Azeezat":30,"Azeez":28,"Qozeem":26}';
$obj = json_decode($jsonobj);

echo $obj->Ahmed."<br>";
echo $obj->Azeezat."<br>";
echo $obj->Azeez."<br>";
echo $obj->Qozeem;
echo "<br><br>";

//This example shows how to access the values from a PHP associative array:
$jsonobj = '{"Ahmed":32,"Azeezat":30,"Azeez":28,"Qozeem":26}';
$arr = json_decode($jsonobj, true);

echo $arr["Ahmed"]."<br>";
echo $arr["Azeezat"]."<br>";
echo $arr["Azeez"]."<br>";
echo $arr["Qozeem"];
echo "<br><br>";

//Looping through php objects...
foreach ($obj as $key => $value) {
	echo $key . " is ". $value . " years old.<br>";
}
echo "<br><br>";

//Looping through associative array...
foreach ($arr as $key => $value) {
	echo $key . " is " . $value . " years old.<br>";
}
?>