<?php 
// import server connection settings using 'require
require "connectOOP.php";

// -------MySQLi (Object-Oriented style)-------
// set db to connect to
$databse_name_oop = "OOP";

// overwrite connection string to include database name
$connect_mysqli_oop = new mysqli($servername, $username, $password, $databse_name_oop);

// define sql query
$sql_oo = "INSERT INTO Students (name, email) VALUES ('Banji Odeniran', 'banjiodeniran@gmail.com')";

if ($connect_mysqli_oop->query($sql_oo) === TRUE) {
    // get the last inserted/updated id
    $last_id = $connect_mysqli_oop->insert_id;
    echo "Successfully added data so table - 'Object-Oriented' style\r\n";
    // echo last inserted id
    echo "The last inserted/updated ID is: " . $last_id . "\r\n";
} else {
    echo "Failed adding data to table - 'Object-Oriented' style\r\n";
    $connect_mysqli_oop->error;
}

// close connection: although, connection closes automatically wen the script ends
// $connect_mysqli_oop->close();
?>