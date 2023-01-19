<?php 
// import server connection settings using 'require
require "connectOOP.php";

// -------MySQLi (Object-Oriented style)-------
// set database to connect to
$databse_name_oop = "OOP";

// overwrite connection string to include database name
$connect_mysqli_oop = new mysqli($servername, $username, $password, $databse_name_oop);

// define the sql statement 
$sql_oo = "CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($connect_mysqli_oop->query($sql_oo) === TRUE) {
    echo "Successfully created table - 'Object-Oriented' style\r\n";
}
else {
    echo "Failed creating table - 'Object-Oriented' style\r\n " . $connect_mysqli_oop->error;
}

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();