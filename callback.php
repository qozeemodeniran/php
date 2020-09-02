<?php 
//Calculting the lenght of each string in an array
function my_callback($item){
	return strlen($item);
}

$strings = ["QOzeem", "Segun", "Abraham", "Taofik", "AHmed"];
$lenghts = array_map("my_callback", $strings);

print_r($lenghts);
echo "<br><br>";

//using anonymous function...
$strings2 = ["Appele", "Banana", "Orange"];
$lenght = array_map(function($items) {return strlen($items); } , $strings2);
print_r($lenght);
echo "<br><br>";

//Callback on user-defined function...
function exclaim($str){
	return $str . "! ";
}

function ask($str){
	return $str . "? ";
}

function printFormatted($str, $format){
	//Calling the $format callback function...
	echo $format($str);
}

//Passing "exclaim" and "ask" as callback function to printFormatted() 
printFormatted("Hello World", "exclaim");
printFormatted("Hello World", "ask");
?>