<!DOCTYPE html>
<html>
<head>
	<title>Welcome form inputs</title>
</head>
<body>
Welcome <?php echo $_POST["name"];?><br><br>
Your email is <?php echo $_POST["email"];?>
<footer><?php include 'footer.php';?></footer>
</body>
</html>