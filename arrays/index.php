<?php 
// define indexed array
$array = array("test1", 2, 3, 2.35);

// get the length of the array
$arr_len = count($array);

// loop through the array items with for-loop
for($item = 0; $item < $arr_len; $item++) {
    echo $array[$item];

    // rpint each array item on a newline
    echo "<br>"; 
}
?>