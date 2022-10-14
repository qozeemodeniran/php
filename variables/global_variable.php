<?php 

// declare a global variabl (variable out a function)
$var = 20;

// define a function
function Variable(){
    
    // trying to access the global variable inside the function will throw an Undefined variable error
    echo $var;
}

// call the function
Variable();

// access the variable out the function (in global scope) will work correctly
echo "Variable value = " . $var . ": I was called from a global scope";

?>