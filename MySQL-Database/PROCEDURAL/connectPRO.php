<?php
// Datanase connection variables
$servername = "localhost";
$username = "root";
$password = "";

// Database connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connection)
{
	die("Failed database connection: ".mysqli_connect_error());
}
else
{
	echo "Successful database connection";
}

// Close databse connection
mysqli_close($connection);
?>