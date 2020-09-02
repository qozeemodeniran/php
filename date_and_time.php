<?php
//Printing date in different styles...
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Todat is ".date("Y:m:d")."<br>";
echo "Today is ".date("l");
echo "<br><br>";
//Time printing...
date_default_timezone_set("America/New_York");
echo "The time is ".date("h:i:s a");
echo "<br><br>";
//The mktime(hour,minute,second,month,day,year)... creating date and timefrom a numberof parameters supplied to the function..
$d = mktime(11, 14, 54, 4, 7, 1994);
echo "Created time is ".date("Y-m-d	h:i:s a",$d);
echo "<br><br>";
//Converting date from human readable string to Unix timstamp using strtotime()
$d = strtotime("4:41pm July 8 2020");
echo "Created time is ".date("Y-m-d H:i:sa", $d);
echo "<br><br>";
$d = strtotime("+15 days");
echo "I must finish PHP Tutorial on or/before ".date("Y-m-d",$d);
echo "<br><br>";
//Printing date of the next six saturdays...
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
while ($startdate < $enddate) {
	echo date("M d", $startdate)."<br>";
	$startdate = strtotime("+1 week", $startdate);
}
echo "<br><br>";
//Detrming the number of days before Segun's next birthday...October 19 .
$birthday = strtotime("October 19");
$nextbirthday = ceil(($birthday-time())/60/60/24);
echo "There are ".$nextbirthday." days before Segun's next birthday(October 19)";
?>