<?php 

// use static keyword to keep the value of a variable after function execution
function Func(){
    static $var1 = 10;
    echo $var1 . '<br />';
    $var1++;
}

Func();
Func();
Func()
;?>