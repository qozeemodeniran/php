<?php 
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero error");
    }
    return $dividend / $divisor;
}

// try...catch block
try {
    echo divide(3, 0);
} catch (Exception $e) {
    echo "Unable perform division";
}

?>