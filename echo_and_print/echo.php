<?php 

/**
 * echo has no return value, while print has a return value of 1
 * echo can take multiple parameters, while print takes only one argument
 * echo is marginally faster than print
 */

 // using echo to display text
 echo "<h2>Hello PHP</h2>";
 echo "I will jump to a new line<br/>";
 echo "This ", "is ", "a ", "sample ", "of ", "multiple ", "parameters ", "stat
 ement.";

 // using echo to display variables
 $title = "Update";
 $name = "Qozeem Odeniran";
 $statement = "is about to learn php from";
 $location = "w3schools.com";

 $num1 = 10;
 $num2 = 0.5;

 echo "<h2>" . $title . "</h2>";
 echo "<p>" . $name . " " . $statement . " " . $location . ".<br />";
 echo $num1 + $num2;
?>