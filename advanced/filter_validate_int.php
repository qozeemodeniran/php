<?php 
$value = 0;

// validate if value is an integer
if (!filter_var($value, FILTER_VALIDATE_INT) === 0 || !filter_var($value, FILTER_VALIDATE_INT) === false) {
    echo("$value is a valid integer");
} else {
    echo("$value is not a valid integer\n");
    echo $value . " is " . gettype($value) . "\n";
}
?>