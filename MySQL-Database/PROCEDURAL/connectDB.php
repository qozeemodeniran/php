<?php

// declare variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB_pro";

// create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$connection)
{
	die("Database connection failed: ". mysqli_connect_error());
}
echo "Successfull database connection.<br><br>";

// sql to create table
$table_sql = "CREATE TABLE MyClients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// check table creation
if (mysqli_query($connection, $table_sql))
{
	echo "Table MyClients created successfully";
}
else
{
	echo "Error creating table: " . mysqli_error($connection);
}

// close db connection
mysqli_close($connection);

?>