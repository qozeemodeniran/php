<?php
// Database variables
$servername = "localhost";
$username = "root";
$password = "";

// Try and catch block
try
{
	// Database connection
	$connection = new PDO("mysql:host=$servername;dbname=myPDO_test", $username, $password);

	// Set error mode attribute to exception
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Successful database connection";
}
catch (PDOException $e)
{
	echo "Failed database connection:  ".$e->getMessage();
}

// Close databse connection
$connection = null;
?>