<?php 
// get number of days until my birthday
$present_day = strtotime("April 28");
$days_left = ceil(($present_day - time()) / 60 / 60 / 24);
echo "There are " . $days_left . " days until my birthday.\r\n";
?>