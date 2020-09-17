<?php

// declare variables
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$connection = mysqli_connect($servername, $username, $password);

// check connection
if (!$connection)
{
	die("Database connection failed: ". mysqli_connect_error());
}
echo "Successfull database connection.<br><br>";

// sql to create database
$db_sql = "CREATE DATABASE myDB_pro";
if (mysqli_query($connection, $db_sql))
{
	echo "Database created successfully";
}
else
{
	echo "Error creating database: " . mysqli_error($connection);
}

// close db connection
mysqli_close($connection);

?>