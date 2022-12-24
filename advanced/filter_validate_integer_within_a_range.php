<?php 
$value = 200;

$minimum = 1;
$maximum = 200;

// check if a $value is both of type INT, and between 1 and 200
if(filter_var($value, FILTER_VALIDATE_INT, array("options" => 
array("min_range" => $minimum, "max_range" => $maximum))) === false) {
    echo("$value is not within legal range");
} else {
    echo("$value is within legal range");
}
?>