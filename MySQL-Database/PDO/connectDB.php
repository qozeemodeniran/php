<?php

// declare variables
$servename = "localhost";
$username = "root";
$password = "";

// try...catch block that performs connection and errro handling
try
{
	$connection = new PDO("mysql:host=$servename", $username, $password);

	// set PDO error mode to exception
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Successfull database connection.<br><br>";

	// sql to create database
	$db_sql = "CREATE DATABASE myDB_pdo";
	// user exec() 'cos no results are returned
	$connection->exec($db_sql);
	echo "Database created successfully";

}
catch (PDOException $e)
{
	// catch for database connection
	echo "Falied databse connection: " . $e->getMessage();

	// catch for database creation
	echo $db_sql . "<br>" . $e->getMessage();

}

$connection = null;

?>