<?php

// Creating server variables...
$hostname = "localhost";
$username = "root";
$password = "";

// Creating connection to the server...
$conn = mysqli_connect($hostname, $username, $password);

// Checking connection...
if (!$conn) {
 	die("Connection failed!" . mysqli_connect_error());
 } 
 echo "Connected Successfully.";

?>