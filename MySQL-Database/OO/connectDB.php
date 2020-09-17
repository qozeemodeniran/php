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

// sql to insert data into table
$insert_sql = "INSERT INTO MyClients (firstname, lastname, email)
VALUES ('Qozeem', 'Odeniran', 'qozeemodeniran@gmail.com')";

// check insert
if ($connection->query($insert_sql) === TRUE)
{
	echo "New record created Successfully<br><br>";
}
else
{
	echo "Error: " . $insert_sql . $connection->error;
}

// close databse connection
$connection->close();

?>