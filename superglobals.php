<?php
//$GLOBALS...
$x = 30;
$y = 20;
function varsAddition()
{
	//making x and y global and assigning its addintion value to z...
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
varsAddition(); //function call...
echo $z; 
echo "<br><br>";
//$_SERVER
echo $_SERVER['PHP_SELF']."<br>"; //displays the current script's name..
echo $_SERVER['GATEWAY_INTERFACE']."<br>"; //DISPLAY THE CGI THE SERVER IS USING...
echo $_SERVER['SERVER_ADDR']."<br>";//DISPLAYS IP ADDRESS OF THE HOST SERVER...
echo $_SERVER['SERVER_SOFTWARE']."<br>";
echo $_SERVER['REQUEST_METHOD']."<br>";
echo "<br><br>";
//$REQUEST...
echo "<br><br>";

?>