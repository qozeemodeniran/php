<?php 
// create a class
class Name {

    // declare properties
    public $firstname;
    public $lastname;

    // create constructor to initial properties
    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
    }

    // create function to use properties
    public function Intro(){
        return "My name is " . $this->firstname . " " . $this->lastname;
    }
}

// create an object to supply value for properties
$obj = new Name("Qozeem", "Odeniran");

// use the object to call the method 
echo $obj->Intro();
?>