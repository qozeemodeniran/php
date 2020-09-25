<?php
// Declare database connection variables
$servername = "localhost";
$username = "root";
$password = "";

// Create database connection
$connection = new mysqli($servername, $username, $password);

// Check if no error while connecting to database
if ($connection->connect_error) 
{
	die("Database connection failed: ".$connection->connect_error);
}
else
{
	echo "Successful Database connection";
}

// Close databse connection
$connection->close();
?>