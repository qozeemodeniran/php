<?php
$cookie_name = "user";
$cookie_value = "Unknown User";

// set a cookie that expires in a past time to delete a cookie: e.g one hour ago
setcookie($cookie_name, "", time() - 3600);
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        echo "Cookie '" . $cookie_name . "' is deleted";
        ?>
    </body>
</html>