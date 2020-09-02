<?php
echo "The if statement..."."<br>";
$t = date("H");
if($t < "23")
{
	echo "Have a nice day!";
}
echo "<br>";
echo "<br>";
echo "the if-else statement..."."<br>";
$t = date("H");
if($t < "20")
{
	echo "Have a nice day!";
}
else
{
	echo "Have a nice night!";
}
echo "<br>";
echo "<br>";
echo "the if-elseif-else statement..."."<br>";
$t = date("H");
echo "The hour (of the server) is " . $t; 
echo ", and will give the following message:"."<br>";
if($t < "10")
{
	echo "Have a good morning";
}
elseif($t < "20")
{
	echo "Have a good day";
}
else
{
	echo "Have a good night.";
}
?>