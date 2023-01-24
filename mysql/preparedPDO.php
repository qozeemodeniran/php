<?php 
$servername = "localhost";
$username = "root";
$password = "lastborn231";
$dbname = "PDO";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepared sql and bind parameters
   $sql = $connect->prepare("INSERT INTO Students (name, email)
   VALUES (:name, :email)");

   $sql->bindParam(':name', $name);
   $sql->bindParam(':email', $email);

   // insert a row
   $name = "Jibril Odeniran";
   $email = "jodeniran@gmail.com";
   $sql->execute();

   // insert another row
   $name = "Neema Odeniran";
   $email = "nodeniran@gmail.com";
   $sql->execute();

   echo "New records added successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$connect = null;
?>