<?php 
// import server connection settings using 'require
require "connectOOP.php";

// -------MySQLi (Object-Oreinted style)-------
// create database
$sql_oo = "CREATE DATABASE OOP";
if ($connect_mysqli_oop->query($sql_oo) === TRUE) {
    echo "Successfully created database - 'Object-Oriented' style\r\n";
}
else {
    echo "Failed to creating database  - 'Object-Oriented' style\r\n " .$connect_mysqli_oop->error;
}

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();
?>