<?php 
function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

// callback in user-defined functions
function formatted($str, $format) {

    // call $format callback function
    echo $format($str);
}

formatted("Hey", "exclaim");
formatted("What do you mean", "ask");
?>