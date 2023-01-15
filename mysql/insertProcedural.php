<?php 
// import server connection settings using 'require
require "connect.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_procedural = "Procedural";

// overwrite connection string to include database name
$connect_mysqli_procedural = new mysqli($servername, $username, $password, $databse_name_procedural);

// define the sql statement 
$sql_procedural = "INSERT INTO Students (name, email) VALUES('Qozeem Odeniran', 'qozeemodeniran@gmail.com')";

if (mysqli_query($connect_mysqli_procedural, $sql_procedural)){
    echo "Successfully inserted data into table - 'Procedural' style\r\n";
} else {
    echo "Failed inserting data into table - 'Procedura' style\r\n" . mysqli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);
?>