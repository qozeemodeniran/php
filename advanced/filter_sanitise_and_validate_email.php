<?php 
$email = "test.user@testmail.com";

// sanitize email
$sanitize_email = filter_var($email, FILTER_SANITIZE_EMAIL);

// validate email
if(!filter_var($sanitize_email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$sanitize_email is a valid email address");
} else {
    echo ("$sanitize_email is not a valid email address");
}
?>