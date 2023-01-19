<?php 
// import server connection settings using 'require
require "connectProcedural.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_procedural = "Procedural";

// overwrite connection string to include database name
$connect_mysqli_procedural = new mysqli($servername, $username, $password, $databse_name_procedural);

// define the sql statement 
$sql_procedural = "CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect_mysqli_procedural, $sql_procedural)) {
    echo "Successfully created table - 'Procedural' style\r\n";
}
else {
    echo "Failed creating table - 'Procedura' style\r\n" . mysqli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);