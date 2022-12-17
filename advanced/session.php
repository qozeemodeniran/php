<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        // setting session variables
        $_SESSION["skin_color"] = "brown";
        $_SESSION["hair_color"] = "blue";

        echo "Session variable set.";
        ?>
    </body>
</html>