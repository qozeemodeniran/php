<?php 
$cookie_name = "User";
$cookie_value = "Qozeem Odeniran";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<?php
//Checking if cookie is enabled...
setcookie("test_cookie", "test", time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<?php
	if (!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named ". $cookie_name . "' is not set!";
	}
	else
	{
		echo "Cookie '" . $cookie_name . "' is set<br>";
		echo "Value is : " . $_COOKIE[$cookie_name] . "<br>";
	}

	//checking enabled cookie
	if (count($_COOKIE) > 0) {
		echo "Cookie is enabled";
	}
	else
	{
echo "cookie is disabled.";
	}
	?>
</body>
</html>