<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        // echo session variables set previously
        echo "Skin color is " . $_SESSION["skin_color"] . "<br>";
        echo "Hair color is " . $_SESSION["hair_color"] . "<br>";

        // another way to get all session variables is...
        print_r($_SESSION);
        ?>
    </body>
</html>