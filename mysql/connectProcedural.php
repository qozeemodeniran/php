<?php
// define server information
$servername="localhost";
$username="root";
$password="lastborn231";

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
?>