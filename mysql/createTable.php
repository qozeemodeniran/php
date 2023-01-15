<?php 
// import server connection settings using 'require
require "connect.php";

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

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_procedural = "Procedural";

// overwrite connection string to include database name
$connect_mysqli_procedural = new mysqli($servername, $username, $password, $databse_name_procedural);

// define the sql statement 
$sql_procedural = "CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect_mysqli_procedural, $sql_procedural)) {
    echo "Successfully created table - 'Procedural' style\r\n";
}
else {
    echo "Failed creating table - 'Procedura' style\r\n" . mysqli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);

// -------PDO style-------
// set database to connect to
$databse_name_pdo = "PDO";

// overwrite connection string to include database name
$connect_pdo = new PDO("mysql:host=$servername;dbname=PDO", $username, $password);

// define the sql statement 
$sql_pdo = "CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($connect_pdo->exec($sql_pdo)) {
    echo "Succcessfully created table - 'PDO' style\r\n";
}
else {
    echo $sql_pdo . "\r\n" . $e->getMessage();
}

// close connection: although, connection closes automatically wen the script ends
// $connect_pdo = null;