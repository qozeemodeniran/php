<?php 
// import server connection settings using 'require
require "connectProcedural.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_procedural = "Procedural";

// overwrite connection string to include database name
$connect_mysqli_procedural = new mysqli($servername, $username, $password, $databse_name_procedural);

// define the sql query to insert multiple records
$sql_procedural = "INSERT INTO Students (name, email) 
VALUES 
('Dami Odeniran', 'damiodeniran@gmail.com'), 
('Alabi Odeniran', 'alabiodeniran@gmail.com')";

// we must use the mysqli_multi_query() function to send multiple data to the database
if (mysqli_multi_query($connect_mysqli_procedural, $sql_procedural)){
    echo "Successfully inserted records into table - 'Procedural' style\r\n";
} else {
    echo "Failed inserting data into table - 'Procedura' style\r\n" . mysqli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);
?>