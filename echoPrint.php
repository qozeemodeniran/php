<?php 
// echo and print are more or less the same. They are both used to output data to the screen.
// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
echo "<h2>Hello,</h2>"."My name is <b>Qozeem Odeniran.<b>";
echo "<p>I am new to learning <strong>PHP</strong></p>";
echo "<br>";
//Using variables to output text
$greeting = "Hi there";
$intro = "My name is";
$fullName = "Qozeem Odeniran";
$message = "I am new to PHP environment, can someone take me around?";
//echo statements...
echo "$greeting,"."<br>";
echo "$intro "."<strong>$fullName</strong>"."<br>";
echo "$message";
echo "<br>";
echo "<br>";
//USING PRINT STATEMENTS
print $intro." ".$fullName;
 ?>