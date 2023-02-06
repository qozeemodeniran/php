<?php 
ini_set("log_errors", 1);
ini_set("error_log", "/Users/qozeemodeniran/Projects/web/php/error.log");

$q = intval($_GET['q']);

$servername="localhost";
$username="root";
$dbname = "PDO";
$password="lastborn231";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $connect->prepare("SELECT * FROM Students WHERE id = :id");
    $sql->bindParam(':id', $q);
    $sql->execute();

    echo "<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Registration Date</th>
    </tr>";
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['registration_date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $ex) {
    die("Error: " . $ex->getMessage());
}

$connect = null;
?>