<?php 
include "./connectOOP.php";

$dbname = "OOP";
$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Unable to connect to DB");
}

$sql = "SELECT id, name, email, registration_date FROM Students";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // display the data of each db row in a table
    echo "<table border='2px xolid black'><tr><th>ID</th><th>Name</th><th>Registration Date</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["registration_date"] ."</td>
            </tr>";
        }
    echo "</table>";
} else {
    echo "No reuslts found";
}

$connect->close();
?>