<?php 
class Student {
    // properties
    public $name, $major;

    // set method
    function set_prop($name, $major) {
        $this->name = $name;
        $this->major = $major;
    }

    // get methods
    function get_name() {
        return $this->name;
    }

    function get_major() {
        return $this->major;
    }
}

// object
$student1 = new Student();

// set prop values
$student1->set_prop('Qozeem Odeniran', 'Infomation Technology');

// display student
echo $student1->get_name() . " is a student majoring in " . $student1->get_major();
?>