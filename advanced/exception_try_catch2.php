<?php 
function fullname($firstname, $lastname) {
    if ($firstname != "Qozeem") {
        throw new Exception("This is not the right person");
    } else {
        return $firstname . " " . $lastname;
    }
}

try {
    echo fullname("Wahab", "Odeniran");
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}
?>