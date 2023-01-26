<?php 
include "./connectProcedural.php";

$dbname = "Procedural";

$connect =  mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Unable to connect to DB");
}

$sql = "SELECT id, name, email, registration_date FROM Students";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output the data of each db row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " | Name: " . $row["name"] . " | Registered Date: " . $row["registration_date"] . "\r\n";
    }
} else {
    echo "No results found";
}

mysqli_close($connect);
?>