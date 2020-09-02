<!DOCTYPE html>
<html>
<head>
	<title>Number count</title>
</head>
<body>
<?php  
for ($i=1; $i <= 20; $i++) {

	$number = 2;
	$output = '';
	if ($i % 3 == 0) {
		echo "<div style='font-style: italic;'>".$i." -- This is a third number.</div>";
	}elseif ($i % 10 == 0) {
		echo "<div style='font-weight: bold;'>".$i." -- This is a tenth number.</div>";
	}else{
		echo "<div style='color: red;'>".$i." -- This is a neither a third nor a tenth number.</div>";
	}

	if ($number % $i == 0) {
		echo "This is a prime number";
	}


}
?>
</body>
</html>