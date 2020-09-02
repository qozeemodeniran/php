<?php
//while-loop
echo "Displaying  1 to 5...<br>";
$number = 1;
while ($number <= 5) {
	echo "The number is $number"."<br>";
	$number++;
}
echo "<br><br>";
echo "Diplaying 0 to 100 in tens...<br>";
$number = 0;
while ($number <= 100) {
	echo "The number is $number<br>";
	$number+=10;
}
echo "<br><br>";
echo "Displaying 1 to 5...<br>";
//do-while loop
$number = 1;
do{
	echo "The number is $number<br>";
	$number++;
}
while ($number <= 5);
//for loop
echo "<br><br>";
echo "Displaying 1 to 10...<br>";
for ($x = 0; $x <= 10; $x++) 
{
  echo "The number is: $x <br>";
}
//foreach loop - works only on arrays...
echo "<br><br>";
echo "Displaying array elements...<br>";
$items = array("keyboard","mouse","bluetooth");
foreach($items as $item)
{
	echo "$item<br>";
}
//foreach loop - works only on arrays...
echo "<br><br>";
echo "Displaying array key-value pairs...<br>";
$age  = array("Ahmed" => "32","Azeezat" => "30", "Azeez" => "28", "Qozeem" => "26" );
foreach ($age as $key => $value) {
	echo "$key is $value years of age.<br>";
}
//break and continue...
echo "<br><br>";
echo "using break to jump out of for-loop<br>";
for ($x=1; $x < 10; $x++) {
	if ($x == 4) { //makes the program to stop @ x = 4.
		break;
	}
	echo "The number is $x<br>"; 
}
echo "<br><br>";
echo "using continue to skip condition infor-loop<br>";
for ($x=1; $x < 10; $x++) {
	if ($x == 4) { //makes the program to skip x = 4.
		continue;
	}
	echo "The number is $x<br>"; 
}
//break and continue in while-loop
echo "<br><br>";
echo "using break to jump out of while-loop<br>";
$x = 0;
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
echo "<br><br>";
echo "using continue to skip condition in while-loop<br>";
$x = 0;
while($x < 10) { //exceeding 30 secs for execution!!!
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>