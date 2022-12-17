<?php 
// display ne 10 Fridays using strtotime()
$begindate = strtotime("Friday");
$stopdate = strtotime("+10 weeks", $begindate);

while ($begindate < $stopdate) {
    echo date("M, d\r\n", $begindate);
    $begindate = strtotime("+1 week", $begindate);
}
?>