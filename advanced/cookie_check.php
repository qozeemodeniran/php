<?php
setcookie("dummy_cookir", "dummy", time() + 3600, "/");
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled";
        } else {
            echo "Cookies are not enabled";
        }
        ?>
    </body>
</html>