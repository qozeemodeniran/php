<?php 
// import server connection settings using 'require
require "connectPDO.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_pdo = "PDO";

// overwrite connection string to include database name
$connect_pdo = new PDO("mysql:host=$servername;dbname=$databse_name_pdo", $username, $password);

// begin the transaction
$connect_pdo->beginTransaction();

// define the sql statement  to insert multiple records to table
$sql_pdo = "INSERT INTO Students (name, email) 
VALUES 
('Dami Odeniran', 'damiodeniran@gmail.com'), 
('Alabi Odeniran', 'alabiodeniran@gmail.com')";

try {
    $connect_pdo->exec($sql_pdo);
    // commit the transaction
    $connect_pdo->commit();
    echo "Successfully inserted new record into table - 'PDO' style\r\n";
} catch (PDOException $e) {
    // rollback the transaction if something failed
    $connect_pdo->rollback();
    echo $sql_pdo . "\r\n" . $e->getMessage();
}

// close connection: although, connection closes automatically wen the script ends
// $connect_pdo = null;
?>