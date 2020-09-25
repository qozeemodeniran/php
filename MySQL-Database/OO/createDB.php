<?php
// Define database connection variables
$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "myOO_db";

// Database connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($connection->connect_error)
{
    die("Failed to connect to database: ".$connection->connect_error);
}

// insert data into table
$create = "INSERT INTO users 
(
    firstname, lastname, email
)
VALUES
(
    'Qozeem', 'Odeniran', 'qozeemodeniran@gmail.com'
)";
if ($connection->query($create) === TRUE)
{
    echo "Records added to table";
}
else 
{
    echo "Error: " . $sql . "<br>" .  $connection->error;
}

// // --------------------------TABLE CODE-------------------------
// // create table
// $create = "CREATE TABLE users
// (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($connection->query($create) === TRUE)
// {
//     echo "Table successfully created";
// }
// else 
// {
//     echo "Failed to create table: " . $connection->error;
// }

// // -------------------DATABASE CODE-------------------------------
// // Create database
// $create = "CREATE DATABASE myOO_db";
// if ($connection->query($create) === TRUE)
// {
//     echo "Database created successfully";
// }
// else
// {
//     echo "Failed to create database: ".$connection->error;
// }

// close connection
$connection->close();
?>