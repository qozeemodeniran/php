<?php 
// import server connection settings using 'require
require "connectProcedural.php";

// -------MySQLi (Procedural style)-------
// set database to connect to
$databse_name_procedural = "Procedural";

// overwrite connection string to include database name
$connect_mysqli_procedural = new mysqli($servername, $username, $password, $databse_name_procedural);

// define the sql statement 
$sql_procedural = "INSERT INTO Students (name, email) VALUES('Banji Odeniran', 'banjiodeniran@gmail.com')";

if (mysqli_query($connect_mysqli_procedural, $sql_procedural)){
    // get the last inserted/updated id
    $last_id = mysqli_insert_id($connect_mysqli_procedural);
    echo "Successfully inserted data into table - 'Procedural' style\r\n";
    // echo last inserted/updated id
    echo "The last inserted/updated ID is: " . $last_id . "\r\n";
} else {
    echo "Failed inserting data into table - 'Procedura' style\r\n" . mysqli_error($connect_mysqli_procedural);
}

// close connection: although, connection closes automatically wen the script ends
// mysqli_close($connect_mysqli_procedural);
?>