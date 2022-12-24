<?php 
$url = "http://php.test/advanced/upload.php";

// sanitize url
$sanitize_url = filter_var($url, FILTER_SANITIZE_URL);

// validate url
if(!filter_var($sanitize_url, FILTER_VALIDATE_URL) === false) {
    echo("$sanitize_url is a valid URL");
} else {
    echo ("$sanitize_url is not a valid URL");
}
?>