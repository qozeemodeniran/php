<?php 
// create function
function callback($item) {
    return strlen($item);
}

$items = ["pen", "lamp", "keyboard", "mouse"];

// use callback() as an argument in array_map() 
$lengths = array_map("callback", $items);

print_r($lengths);
?>