<?php 
// declare strict
declare(strict_types=1);

// create function with arguments and sepcify function return data type
function Multiply(float $x, $y, $z): float {
    return $x * $y * $z;
}

// function call
echo Multiply(2.2,3,4);
?>