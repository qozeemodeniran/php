<?php
// define server information
$servername="localhost";
$username="root";
$password="lastborn231";

// create connection inside try...catch block
try {
    $connect_pdo = new PDO("mysql:host=$servername;dbname=test1_db", $username, $password);

    // set PDO error mode to exception
    $connect_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfull database connection - 'PDO style' \r\n";
}
catch (PDOException $e) {
    echo "Failed database connection - 'PDO style'\r\n" . $e->getMessage();
}

// close connection: although, connection closes automatically wen the script ends
// $connect_pdo = null;
?>