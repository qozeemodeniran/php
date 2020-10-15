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

// Prepared statements.................
$statement = $connection->prepare("INSERT INTO users (firstname, lastname, email) VALUES(?, ?, ?)");
$statement->bind_param("sss", $firstname, $lastname, $email);
// Set parameters and execute
$firstname="Olaosebikan";
$lastname="Bukunmi";
$email="olaosebikanbukunmi@gmail.com";
$statement->execute();

$firstname="Olaosebikan";
$lastname="Bukunmi";
$email="olaosebikanbukunmi@gmail.com";
$statement->execute();

$firstname="Olaosebikan";
$lastname="Bukunmi";
$email="olaosebikanbukunmi@gmail.com";
$statement->execute();

echo "New records created!";

$statement->close();


// // Insert nultiple records into table-----------------------------------------
// $insert = "INSERT INTO users
// (
//     firstname, lastname, email
// )
// VALUES 
// (
//     'Azeez', 'Aremu', 'azeezaremu@gmail.com'
// );";
// $insert .= "INSERT INTO users
// (
//     firstname, lastname, email
// )
// VALUES 
// (
//     'Junaid', 'Babatunde', 'junaidbabatunde@gmail.com'
// );";

// $insert .= "INSERT INTO users
// (
//     firstname, lastname, email
// )
// VALUES 
// (
//     'Ismail', 'Owoade', 'ismailowoade@gmail.com'
// );";
// if ($connection->multi_query($insert) == TRUE)
// {
//     echo "Created new records succesfully";
// }
// else
// {
//     echo "Error: " . $insert . "<br>" . $connection->error;
// }

// // ------------------------INSERT CODE $ LAST_ID-----------------------
// // insert data into table
// $create = "INSERT INTO users 
// (
//     firstname, lastname, email
// )
// VALUES
// (
//     'Jibril', 'Odeniran', 'jibrilodeniran@gmail.com'
// )";
// if ($connection->query($create) === TRUE)
// {
//     $lastId = $connection->insert_id;
//     echo "Records added to table. <br>
//     The last inserted id is: " . $lastId;
// }
// else 
// {
//     echo "Error: " . $sql . "<br>" .  $connection->error;
// }

// // --------------------------TABLE CODE-------------------------
// create table
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

// -------------------DATABASE CODE-------------------------------
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