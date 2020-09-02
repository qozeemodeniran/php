<!DOCTYPE html>
<html>
<head>
	<title>My form</title>
	<style type="text/css">
		.error{
			color: #ff0000;
		}
	</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required.";
	}else{
		$name = test_input($_POST["name"]);
		//checking if name contains only letters and whitespace...
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Only letters and whitespace allowed.";
		}
	}
	if (empty($_POST["email"])) {
		$emailErr = "Email is required.";
	}else{
		$email = test_input($_POST["email"]);
		//Checking if email is well-formed...
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format.";
		}
	}
	if (empty($_POST["website"])) {
		$websiteErr = "Website is required.";
	}else{
		$website = test_input($_POST["website"]);
		//Checking if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    	}
	}
	if (empty($_POST["comment"])) {
		$comment = "";
	}else{
		$comment = test_input($_POST["comment"]);
	}
	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required.";
	}else{
		$gender = test_input($_POST["gender"]);
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="personalInfo">
	<p class="error">* Required field.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name; ?>">
	<span class="error">*<?php echo $nameErr;?></span><br><br>
	E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
	<span class="error">* <?php echo $emailErr;?></span><br><br>
	Website: <input type="text" name="website" value="<?php echo $website; ?>">
	<span class="error">*<?php echo $websiteErr; ?></span><br><br>
	<textarea name="comment" rows="5" cols="20" placeholder="Write your comment here..."><?php echo $comment; ?></textarea><br><br>
	Gender:<br>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female<br>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male<br>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
	<span class="error">* <?php echo $genderErr; ?></span><br><br>
	<input type="Submit">
	</div>
	<?php
	echo "<h2>Your details...</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	?>
</form>
<footer><?php include 'footer.php';?></footer>
</body>
</html>