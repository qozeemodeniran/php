<?php 
// declare strict
declare(strict_types=1);

// create function with argument by reference using & operation
function my_age(&$age) {

    echo "I was " . $age . " years old in 2017.";
    // initialise the age
    $age += 5;
}

// some random number
$year = 23;

// function call
my_age($year);


echo "Then, I grew to become " . $year . " years old in 2022.";
?>