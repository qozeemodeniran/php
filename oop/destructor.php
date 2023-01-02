<?php 
class Person {
    public $name, $status;

    function __construct($name, $status) {
        $this->name = $name;
        $this->status = $status;
    }

    function __destruct() {
        echo "My name is {$this->name}, and I am {$this->status} with two kids.";
    }
}

$person1 = new Person("Qozeem Odeniran", "married");
?>