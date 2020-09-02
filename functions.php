<?php
//funtion without argument...
function writeMsg(){
	echo "Hello PHP";
}
writeMsg();
echo "<br><br>";
//function with argument...
function lastNames($firstNames, $year){
	echo "$firstNames Odeniran. Born in year $year<br>";
}
lastNames("Ahmed", "1988");
lastNames("Azeezat", "1990");
lastNames("Azeez", "1992");
lastNames("Qozeem", "1994");
?>