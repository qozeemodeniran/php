<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="name"><br><br>
	<input type="Submit" name="">
</form>
</div>
<?php
echo "<br><br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_REQUEST['name'];
	if (empty($name)) {
		echo "Name is empty";
	}
	else
	{
		echo "Your name is ".$name.".";
	}
}
?>
</body>
</html>