<?php 

// create a function
function Variable(){
    
    // define a local varaiable
    $var = 20;

    // accessing the local variable from within the function works correctly
    echo "I am a local variable, and my value is: " . $var;
}

// call the function
Variable();

// accssing the variable outside its scope will cause an Undefined Variable error
echo $var;


?>