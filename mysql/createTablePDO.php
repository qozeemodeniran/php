<?php 
// import server connection settings using 'require
require "connectPDO.php";

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