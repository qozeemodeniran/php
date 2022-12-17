<?php 
$dt = strtotime("today");
echo "Today is: " . date("m-d-Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("tomorrow");
echo "Tomorrow is: " . date("m-d-Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("next friday");
echo "Next Friday is: " . date("m-d-Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("+6 months");
echo "Next six months is: " . date("m-d-Y H:i:sa\r\n\r\n", $dt);
?>