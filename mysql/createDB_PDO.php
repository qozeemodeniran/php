<?php 
// import server connection settings using 'require
require "connectPDO.php";

// -------MySQLi (PDO style)-------
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