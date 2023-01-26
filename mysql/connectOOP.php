<?php
// define server information
$servername="localhost";
$username="root";
$password="lastborn231";

// -------MySQLi (Object-Oriented style)-------
// create connection
$connect_mysqli_oop = new mysqli($servername, $username, $password);

// check connection
if($connect_mysqli_oop->connect_error) {
    die("Failed database connection - 'Object-Oriented style' \r\n" . $connect_mysqli_oop->connect_error);
}
echo "Successful database connection - 'Object-Oriented style' \r\n";

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();
?>