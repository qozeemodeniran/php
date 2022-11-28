<?php 

// set strict
declare(strict_types=1);

// create function with argument
function info(string $first_name) {
    echo $first_name . " Odeniran is " . $age . " years old.";
} 

// create function with default argument
function Height(int $height = 6) {
    echo "He is " . $height . " inches tall.";
}

// function call
info(30, "Azeez");
Height();
?>

