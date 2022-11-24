<?php 

// define array
$students = array('Qozeem Odeniran' => 'Information Technology', 'Ahmed Sanusi' => 'Statistics', 'Taiwo Taiwo' => 'Computer Science');

// foreach loop to iterate through the array
foreach($students as $key => $val) {
    // echo $key . "<br />"; // // output only keys
    //  echo $val . "<br />"; // // output only values
    echo "$key: $val <br />"; // // output keys and values

}

?>