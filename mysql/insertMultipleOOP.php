<?php 
// import server connection settings using 'require
require "connectOOP.php";

// -------MySQLi (Object-Oriented style)-------
// set db to connect to
$databse_name_oop = "OOP";

// overwrite connection string to include database name
$connect_mysqli_oop = new mysqli($servername, $username, $password, $databse_name_oop);

// define sql query to insert multiple data
$sql_oo = "INSERT INTO Students (name, email) 
VALUES 
('Dami Odeniran', 'damiodeniran@gmail.com'), 
('Alabi Odeniran', 'alabiodeniran@gmail.com')";

// we must use the multi_query() function to send multiple data to the database
if ($connect_mysqli_oop->multi_query($sql_oo) === TRUE) {
    echo "Successfully added new records so table - 'Object-Oriented' style\r\n";
} else {
    echo "Failed adding data to table - 'Object-Oriented' style\r\n";
    $connect_mysqli_oop->error;
}

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();
?>