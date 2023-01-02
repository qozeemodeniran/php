<?php 
class Person {
    public $name, $occupation;

    // Construct function: used to set object's properties on object creation
    function __construct($name, $occupation) {
        $this->name = $name;
        $this->occupation = $occupation;
    }

    function get_name() {
        return $this->name;
    }

    function get_occupation() {
        return $this->occupation;
    }
}

$person1 = new Person("Qozeem Odeniran", "Software Developer");

echo "My name is " . $person1->get_name() . ", and I am a " . $person1->get_occupation() . ".";
?>