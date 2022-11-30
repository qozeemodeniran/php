<?php 
// define an index array
$index_arr = array(2, "boy", 4, "girl", 1, "young", 5, "old");

// array length
$ind_arr_len = count($index_arr);

// ascending sort
echo "-----sort array in ascedning -----\r\n";
sort($index_arr);
for($val = 0; $val < $ind_arr_len; $val++) {
    echo $index_arr[$val] . "\r\n";
}

// descending sort
echo "-----sort array in descedning -----\r\n";
rsort($index_arr);
for($val = 0; $val < $ind_arr_len; $val++) {
    echo $index_arr[$val] . "\r\n";
}

echo "\r\n";
echo "\r\n";

// define associative array
$asso_arr = array("boy" => 2, "girl" => 4, "young" => 1, "old" => 5);

// sort the array in descending order of values
arsort($asso_arr);

echo "----sorting the array in descending order of values------";
foreach($asso_arr as $key => $value) {
    echo "\r\n"; echo "\r\n";
    echo  "Key: " . $key . " | " . "Value: " . $value . "\r\n";
}

echo "\r\n"; echo "\r\n";

// sort the array in descending order of keys
krsort($asso_arr);
echo "----sorting the array in descending order of keys------";
foreach ($asso_arr as $key2 => $value2) {
    echo "\r\n"; echo "\r\n";
    echo  "Key: " . $key2 . " | " . "Value: " . $value2 . "\r\n";
}
?>