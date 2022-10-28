<?php 

/**
 * echo has no return value, while print has a return value of 1
 * echo can take multiple parameters, while print takes only one argument
 * echo is marginally faster than print
 */

 // ujsing print to display text
 print "<h2>I am revising my PHP skill.</h2>";
 print "Hello Amigo! <br />";
 print "I'm about to become a senior dev";

 // using php to display variables
 $title = "Update";
 $name = "Qozeem Odeniran";
 $statement = "is about to learn php from";
 $location = "w3schools.com";

 $num1 = 10;
 $num2 = 0.5;

 print "<h3>" . $location . "</h2>";
 print "That is where " . $name . " is learning PHP from. <br />";
 print $num1 - $num2;

?>