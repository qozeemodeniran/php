<!DOCTYPE html>
<html>
<head>
	<title>Filter</title>
<style>
	body{
		padding: 30px;
	}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 5px;
}

table{
	position: relative;
	float: right;
	margin-top: -100px;
}

</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  echo "<br><br>";

  //Sanitizing data...
  $str = "<h1>Hello filter!</h1>";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
  echo $newstr;
  echo "<br><br>";

  //Validating integer...
  $int = 100;
  if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  	echo "Integer is valid";
  }
  else
  {
  	echo "Integer is not valid.";
  }
  echo "<br><br>";

  //Validating IP address...
  $ip = "127.0.0.1";
  if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  	echo "$ip is a valid IP address";
  }
  else
  {
  	echo "$ip is not a valid IP address";
  }
  echo "<br><br>";

  //Sanitizing and validating email address...
  $email = "muhdqozeem@gmail.com";
  //sanitizing $email...
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //Validating $email...
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  	echo "$email is a valid email";
  }
  else
  {
  	echo "$email is not a valid email";
  }
  echo "<br><br>";

  //Sanitizing and validating URL...
  $url = "https://www.w3schools.com";
  //Sanitizing $url...
  $url = filter_var($url, FILTER_SANITIZE_URL);
  //validating #url...
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  	echo "$url is a valid URL.";
  }
  else
  {
  	echo "$url is not a valid URL";
  }
  echo "<br><br>";

  //Validating interger withn a range of values...
  $int = 122;
  $min = 1;
  $max = 200;
  //validation...
  if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  	echo "Variable value is not is within the legal range.";
  }
  else
  {
  	echo "Variable value is within the legal range.";
  }
  echo "<br><br>";

  //Validating IPv6 address..
  $ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
  if (!filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  	echo "$ipv6 is a valid IPv6 address";
  }
  else
  {
  	echo "$ipv6 is not a valid IPv6 address";
  }
  echo "<br><br>";

  //Validate url - must contain a queryString...
  $url2 = "https://www.w3schools.com";
  if (!filter_var($url2, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  	echo "$url2 is a valid URL with a query string";
  }
  else
  {
  	echo "$url2 is not a valid URL with a query string.";
  }
  echo "<br><br>";

  //Remove html tag and ascii value > 127...
  $str2 = "<h1>Hello WorldÆØÅ!</h1>";
  $newstr2 = filter_var($str2, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  echo "$newstr2";
  ?>
</table>
</body>
</html>
