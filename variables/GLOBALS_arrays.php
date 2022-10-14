<?php 

// define global variables
$global_var1 = 2;
$global_var2 = 4;

// create a function
function Func() {

    // use the '$GLOBALS' array to access and change the global variable values
   $GLOBALS['global_var2'] = $GLOBALS['global_var1'] + $GLOBALS['global_var2'];
   
}

// function call
Func();

// print the outcome
echo $global_var2;

?>