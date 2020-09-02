<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Access</title>
 </head>
 <body>

 	<?php 
 	//Echoing session vars set on session.php page...
 	echo "Username is " . $_SESSION["username"] . "<br>";
 	echo "Colori is " . $_SESSION["color"] . "<br>";
 	echo "Language is " . $_SESSION["language"] . ".";
 	echo "<br><br>";

 	//Another way to output session variable is...
 	$_SESSION["language"] = "Advanced PHP";
 	print_r($_SESSION);
 	?>
 
 </body>
 </html>