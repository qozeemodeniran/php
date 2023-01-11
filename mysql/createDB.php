<?php 
// import server connection settings using 'require
require "connect.php";

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

// -------MySQLi (Procedural style)-------
// create database
$sql_procedural = "CREATE DATABASE Procedural";
if (mysqli_query($connect_mysqli_procedural, $sql_procedural)) {
    echo "Successfully created database - 'Procedural' style\r\n";
}
else {
    echo "Failed creating database - 'Procedural' style\r\n" . mysli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);

// -------MySQLi (Procedural style)-------
// create database
$sql_pdo = "CREATE DATABASE PDO";
if ($connect_pdo->exec($sql_pdo)) {
    echo "Successfull created databse - 'PDO' style\r\n";
} else {
    echo $sql_pdo . "\r\n" . $e->getMessage();
}

// close connection: although, connection closes automatically wen the script ends
// $connect_pdo = null;
?>