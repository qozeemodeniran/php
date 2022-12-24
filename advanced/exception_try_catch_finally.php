<?php 
function fullname($firstname, $lastname) {
    if ($firstname != "Qozeem") {
        throw new Exception("Thiss is not the rigth person");
    } else {
        return $firstname . " " . $lastname;
    }
}

try {
    echo fullname("Wahab", "Odeniran");
} 
catch (Exception $e) {
    echo "Unable to output fullname \n";
}
finally{
    echo "Process ended";
}
?>