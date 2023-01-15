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

// -------MySQLi (Procedural style)-------
// create connection
$connect_mysqli_procedural = mysqli_connect($servername, $username, $password);

// check connection
if(!$connect_mysqli_procedural) {
    die("Failed database connection - 'Procedural style' \r\n" . mysqli_connect_error());
}
echo "Successful database connection - 'Procedural style' \r\n";

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);

// -------PDO style-------
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