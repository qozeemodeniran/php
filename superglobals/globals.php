<?php 
// create variables
$var1 = 28;
$var2 = 2;

// create a function
function division() {
    
    // create GLOBALS variable
    $GLOBALS['value'] = $GLOBALS['var1'] / $GLOBALS['var2'];
}

// call the function
division();

// access varibale 'value' from outside the funcion
echo $value;
?>