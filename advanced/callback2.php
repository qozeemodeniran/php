<?php 
$items = ["pen", "lamp", "keyboard", "mouse"];

//  use anonymour as callback 
$lengths = array_map(
    function($item) {
        return strlen($item); 
    }, $items);

print_r($lengths);
?>