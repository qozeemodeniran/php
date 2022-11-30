<?php
// define multidiemnsional array
$array = array(
array("Ahmed Odeniran", "Male", 34),
array("Azeezat Odeniran", "Female", 32),
array("Azeez Odeniran", "Male", 30),
array("Qozeem Odeniran", "Male", 28),
);

// print array element to screen
echo "---Family Info---\r\n";
echo "1. name: " . $array[0][0] . " | gender: " . $array[0][1] . " | age: " . $array[0][2] . "\r\n";
echo "2. name: " . $array[1][0] . " | gender: " . $array[1][1] . " | age: " . $array[1][2] . "\r\n";
echo "3. name: " . $array[2][0] . " | gender: " . $array[2][1] . " | age: " . $array[2][2] . "\r\n";
echo "4. name: " . $array[3][0] . " | gender: " . $array[3][1] . " | age: " . $array[3][2] . "\r\n";

echo "\r\n";
echo "\r\n";

echo "-----using nested for-loop to get multidemensional array elements";

echo "\r\n";
echo "\r\n";

// get the lenght of the array
$arr_len = count($array);

// first for-loop
for($row = 0; $row < $arr_len; $row++) {
    
    // second for-loop
    for($col = 0; $col < $arr_len - 1; $col++) {

        echo $array[$row][$col] . "\r\n";
    }

    echo "\r\n";
}

?>
