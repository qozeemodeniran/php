<?php 
class Name {
    const FULLNAME = "Qozeem Odeniran";
    const GREETING = "Hello " . self::FULLNAME  . ", it's nice meeting you.";

    public function greet() {
        // access constant withing the class with self::classname
        echo self::GREETING;
    }
}


// access constant from outside the class with :: operator
echo Name::FULLNAME . "\n";

$greeting = new Name();
$greeting->greet();
?>