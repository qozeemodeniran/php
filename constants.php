<?php
// define(name, value, case-insensitive)
// name: Specifies the name of the constant
// value: Specifies the value of the constant
// case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
//case-sensitive constatnt...
echo "Constant with case-sensitive name..."."<br>";
define('GREETING', 'Hello Bae, you are doing well!!!');
echo(GREETING);
//case-insensitive constant...
echo "<br>";
echo "<br>";
echo "Constant with case-insensitive name..."."<br>";
define('GREETING', 'Hello guy, you re not doing well!!!', true);
echo(greeting);
//Creat array constant...
echo "<br>";
echo "<br>";
echo "Using define() to create array constant..."."<br>";
// define("cars", [
//   "Alfa Romeo",
//   "BMW",
//   "Toyota"
// ]);
// echo cars[0];
//Using constant value outside it's definition scope...
echo "<br>";
echo "<br>";
echo "Using constant's value outside its definition scope..."."<br>";
define("Message", "I am new here!", true);
function myMessage(){
	echo(Message);
}
myMessage();
?>