<?php

// declare varaiables
$servername= "localhost";
$username = "root";
$password = "";

// create connection
$connection = new mysqli($servername, $username, $password);

// check connection
if ($connection->connect_error)
{
	die("Connection failed: ".$connection->connect_error);
}
echo "Successfully connected to database.<br><br>";


// sql to create database
$db_sql = "CREATE DATABASE myDB_oo";
// check database creation
if ($connection->query($db_sql) === TRUE)
{
	echo "Database created successfully";
}
else
{
	echo "Error occure while creating database: " . $connection->error;
}

// close databse connection
$connection->close();

?>