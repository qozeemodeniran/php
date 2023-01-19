<?php 
// import server connection settings using 'require
require "connectProcedural.php";

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
?>