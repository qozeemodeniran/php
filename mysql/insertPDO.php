<?php 
// import server connection settings using 'require
require "connectPDO.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_pdo = "PDO";

// overwrite connection string to include database name
$connect_pdo = new PDO("mysql:host=$servername;dbname=$databse_name_pdo", $username, $password);

// define the sql statement 
$sql_pdo = "INSERT INTO Students (name, email) VALUES('Qozeem Odeniran', 'qozeemodeniran@gmail.com')";

try {
    $connect_pdo->exec($sql_pdo);
    echo "Successfully inserted data into table - 'PDO' style\r\n";
} catch (PDOException $e) {
    echo $sql_pdo . "\r\n" . $e->getMessage();
}

// close connection: although, connection closes automatically wen the script ends
// $connect_pdo = null;
?>