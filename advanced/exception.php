<?php 
function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero error");
    } else {
        $result = $dividend / $divisor;
        return $result;
    }
}

echo divide(2, 0);
?>