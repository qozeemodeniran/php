<?php
//Strings...
echo "String..."."<br>";
$string = "I am a double quoted string.";
$string2 = 'I am a single quoted string';
echo $string."<br>";
echo $string2;
echo "<br>";
echo "<br>";
//Integer...
echo "Integer..."."<br>";
$x = 101;
echo var_dump($x); //var_dump() returns the data type and value.
echo "<br>";
echo "<br>";
//Float...
echo "Float..."."<br>";
$var = 3.142;
echo(var_dump($var));
echo "<br>";
echo "<br>";
//Boolean...
echo "Boolean..."."<br>";
$bool = true;
$bool2 = false;
echo var_dump($bool)."<br>";
echo var_dump($bool2);
echo "<br>";
echo "<br>";
//Array...
echo "Array..."."<br>";
$siblings = array("Ahmed", "Azeezat", "Azeez");
echo var_dump($siblings);
echo "<br>";
echo "<br>";
//Object...
echo "Object..."."<br>";
class car{
	function car(){
		$this->model = "VW";
		$this->year = 2007;
	}
}
	//obejct creation
	$herbie = new Car();
	echo $herbie->model."<br>";
	echo $herbie->year;
echo "<br>";
echo "<br>";
//Null...
echo "Null..."."<br>";
$name = "Qozeem Odeniran";
$name = Null; //empties the value of $name.
echo var_dump($name);
?>