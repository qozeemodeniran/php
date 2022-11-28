<?php 

// declare the strict php
declare(strict_types=1);

// create a fucntion with arguments
function addUp(int $a, $b) {
    return $a + $b;
}
// funciton call
echo addUp(4, "1 holla"); // this will throw an error (fatal) 'cos php has been set to STRICT
echo  addUp(3, 4); // this will work as expected
?>