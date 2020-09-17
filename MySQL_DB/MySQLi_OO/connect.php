<?php

$servername = "localhost";
$username = "root";
$password = "";

// Creating connection...
$conn = new mysqli($servername, $username, $password);

// Checking connection...
if ($conn-> connect_error) 
{
	die("Connection Failed!" . $conn->connect_error);
}
echo "Connected Successfully.";

?>