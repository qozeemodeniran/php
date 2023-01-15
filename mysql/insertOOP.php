<?php 
// import server connection settings using 'require
require "connect.php";

// -------MySQLi (Object-Oriented style)-------
// set db to connect to
$databse_name_oop = "OOP";

// overwrite connection string to include database name
$connect_mysqli_oop = new mysqli($servername, $username, $password, $databse_name_oop);

// define sql query
$sql_oo = "INSERT INTO Students (name, email) VALUES ('Qozeem Odeniran', 'qozeemodeniran@gmail.com')";

if ($connect_mysqli_oop->query($sql_oo) === TRUE) {
    echo "Successfully added data so table - 'Object-Oriented' style\r\n";
} else {
    echo "Failed adding data to table - 'Object-Oriented' style\r\n";
    $connect_mysqli_oop->error;
}

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();
?>