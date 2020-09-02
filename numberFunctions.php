<?php
//Integer check...
echo "Cheking if a value is an integer..."."<br>";
$age = 26;
echo $age.' is of type int ? : ';
echo var_dump(is_int($age));
echo "<br>";
$height = 18.5;
echo $height." is of type int ? : ";
var_dump(is_int($height));
//Float check...
echo "<br>";
echo "<br>";
echo "Cheking if a value is a float..."."<br>";
$height = 18.5;
echo $height.' is of type int ? : ';
echo var_dump(is_float($height));
//infinity check...
echo "<br>";
echo "<br>";
echo "Cheking if a value is finite or infinite ..."."<br>";
$random = 1.9e411;
echo "1.9e411 is of type finite? : ";
echo var_dump(is_finite($random));
//Not A Number (NaN) check...
echo "<br>";
echo "<br>";
echo "Cheking if a value is NaN..."."<br>";
$value = acos(8);
echo 'acos(8) is of type NaN? : ';
echo var_dump(is_nan($value));
//Numeric string check...
echo "<br>";
echo "<br>";
echo "Cheking if a value is numeric or a numeric string..."."<br>";
$num = 231;
echo  $num.' is of type numeric? : ';
echo var_dump(is_numeric($num));
echo "<br>";
$num = "231";
echo  "'$num' is a type of numeric? : ";
echo var_dump(is_numeric($num));
echo "<br>";
$num = "231" + 101;
echo  "*'231' + 101* is a type of numeric? : ";
echo var_dump(is_numeric($num));
echo "<br>";
$name = "Qozeem";
echo  "'$name' is a type of numeric? : ";
echo var_dump(is_numeric($name));
//Casting float and Strings to Integer...
echo "<br>";
echo "<br>";
//cast float to int...
$float = 1.23;
$floatToInt = (int)$float;
echo "The float value '$float' has been casted to integer value $floatToInt"."<br>";
//cast string to int...
$string = "123";
$stringToInt = (int)$string;
echo "The string value '$string' has be casted to integer value $stringToInt";
?>