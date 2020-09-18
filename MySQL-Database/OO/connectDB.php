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
VALUES ('Jibril', 'Odeniran', 'jibrilodeniran@gmail.com')";

// check insert
if ($connection->query($insert_sql) === TRUE)
{
	// get last inserted id
	$last_inserted_id = $connection->insert_id;

	echo "New record created Successfully<br><br>";
	echo "The last id inserted is: " . $last_inserted_id;

}
else
{
	echo "Error: " . $insert_sql . $connection->error;
}

// close databse connection
$connection->close();

?>