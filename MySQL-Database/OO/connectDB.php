<?php

// declare varaiables
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "myDB_oo";


// create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($connection->connect_error)
{
	die("Connection failed: ".$connection->connect_error);
}
echo "Successfully connected to database.<br><br>";

// sql t create table
$table_sql = "CREATE TABLE MyClients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// check create table
if ($connection->query($table_sql) === TRUE)
{
	echo "Table created successfully.<br><br>";
}
else 
{
	echo "Error creating table: " . $connection->error;
}

// close databse connection
$connection->close();

?>