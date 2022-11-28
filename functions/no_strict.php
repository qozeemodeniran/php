<?php 

// create function with two arguments
function multiplication(int $a, int $b) {
    return $a * $b;
}

// call the function with ints and string
echo multiplication(10, "2 days");

// Note: This code throws a type error in php8.1
// pph7.4 runs but gives a no-well-formed-numeric value notice
?>