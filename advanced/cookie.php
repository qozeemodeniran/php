<?php
$cookie_name = "user";
$cookie_value = "Unknown User";

// set a cookie that expires in 30 days and available in all web directories
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        if (!isset($_COOKIE[$cookie_name])) {
            echo "The cookie '" . $cookie_name . "' is not set";
        } else {
            echo "The cookie '" . $cookie_name . "' is set. <br>";
            echo "The cookie's value is: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>