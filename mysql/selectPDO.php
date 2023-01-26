<?php 
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Name</th><th>Registration Date</th></tr>";

include "./connectPDO.php";

try {
    $dbname = "PDO";
    $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $connect->prepare("SELECT id, name, email, registration_date FROM Students");
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $row) {
        echo "<tr>";
        echo "<td style='width:150px;border:1px solid black;'>" . $row->id . "</td>";
        echo "<td style='width:150px;border:1px solid black;'>" . $row->name . "</td>";
        echo "<td style='width:150px;border:1px solid black;'>" . $row->registration_date . "</td>";
        echo "</tr>";
    }
} catch(PDOException $ex) {
    echo "Error: " . $ex->getMessage();
}
$connect = null;
echo "</table>";
?>


