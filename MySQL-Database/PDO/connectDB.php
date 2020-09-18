<?php

// declare variables
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "myDB_pdo";

// try...catch block that performs connection and errro handling
try
{
	$connection = new PDO("mysql:host=$servename;dbname=$dbname", $username, $password);

	// set PDO error mode to exception
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Successfull database connection.<br><br>";

	// // sql to create table
	// $table_sql = "CREATE TABLE MyClients (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 //  	firstname VARCHAR(30) NOT NULL,
 //  	lastname VARCHAR(30) NOT NULL,
 //  	email VARCHAR(50),
 //  	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 //  	)";

 //  	// use exec() 'cos no results are returned
 //  	$connection->exec($table_sql);
 //  	echo "Table MyClients created successfully";

	// sql to insert data into table
	$insert_sql = "INSERT INTO MyClients (firstname, lastname, email)
	VALUES ('Ola', 'Idris', 'olaidris@gmail.com')";

	// check insert
	$connection->exec($insert_sql);
	// get last id
	$last_inserted_id = $connection->lastInsertId();
	echo "New record added to table<br><br>";
	echo "The last inserted id is: " . $last_inserted_id;

}
catch (PDOException $e)
{
	// catch for table
	// echo $table_sql . "<br>" . $e->getMessage();

	// catch for insert
	echo "Error: " . $insert_sql . "<br>" . $e->getMessage();
}

$connection = null;

?>