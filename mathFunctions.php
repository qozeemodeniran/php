<?php
//pi function...
echo "The pi function..."."<br>";
$value = pi();
echo "The value of 'pi' is ".pi(); //reurns the value of pi.
echo "<br>";
echo "<br>";
//Minimum and Maximum functions...
echo "Returning Minimum and Maximum values from (0,1,2,3,4,5,6,7,8,9)"."<br>";
echo "Returns the Minimum value..."."<br>";
$values = array(0,1,2,3,4,5,6,7,8,9);
echo(min($values))."<br>";
echo "Returns the Maximum value..."."<br>";
echo(max($values));
//Returning absolute value..
echo "<br>";
echo "<br>";
echo "Returns the absolute value..."."<br>";
$value = -1;
echo "The absolute value of $value is ".abs($value);
//Returning square root...
echo "<br>";
echo "<br>";
echo "Returns the square root of a value..."."<br>";
$value = 4;
echo "The square root of $value is ".sqrt($value);
//The round function - rounds a floating number to it's nearest integer...
echo "<br>";
echo "<br>";
echo "Returns whole number..."."<br>";
$number = 0.60;
$rounded = round($number);
echo "$number was rounded up to $rounded"."<br>";
$number2 = 0.49;
$rounded2 = round($number2);
echo "$number2 was rounded down to $rounded2"."<br>";
//The random number...
echo "<br>";
echo "<br>";
echo "Random numbers..."."<br>";
echo(rand())."<br>"; //outputs a random number...
//Including range from which random numbers should be generated...
echo "Generating random number swithing the range 10 and 100"."<br>";
echo(rand(10, 100));
?>