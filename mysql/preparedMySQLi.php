<?php 
$servername = "localhost";
$username = "root";
$password = "lastborn231";
$dbname = "OOP";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die("Connecttion failed: " . $connect->connect_error);
}

// prepared and bind
$sql = $connect->prepare("INSERT INTO Students (
    name, email) 
    VALUES (?, ?)"
);
$sql->bind_param("ss", $name, $email);

// setting paramters to execute
$name = "Jibril Odeniran";
$email = "jodeniran@gmail.com";
$sql->execute();
// setting paramters to execute
$name = "Neema Odeniran";
$email = "nodeniran@gmail.com";
$sql->execute();

echo "New records successfully created";

$sql->close();
$connect->close();
?>