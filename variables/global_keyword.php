<?php 

// define global variables
$var1 = 10;
$var2 = 25;

// create a function
function Function1(){

    // call the global variable inside this function (locally) using the 'global' keyword
    global $var1, $var2;
    $var2 = $var1 + $var2;
}

// call the function
Function1();

// print the new var2
echo $var2;

?>