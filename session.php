<?php 
//Start a session...
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>

	<?php

	//Setting session variables...
	$_SESSION["username"] = "qodeniran";
	$_SESSION["color"] = "White";
	$_SESSION["language"] = "PHP"; 

	echo "Session variables are set";

	?>

</body>
</html>