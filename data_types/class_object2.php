<?php 

// create a class
class Student {

    // create properties
    public $name;
    public $major;

    // use constructor for properties initialisation
    public function __construct($name, $major) {
        $this->name = $name;
        $this->major = $major;
    }

    // create a method to use the properties
    public function Introduction() {
        return "Hello, my name is " . $this->name . ", and I am majoring in the ". $this->major . " depratment.";
    }
}

// create objct of the class to supply properties value
$obj = new Student("Qozeem Odeniran", "Information Technology");

//  use the object to call the function Introduction() above
echo $obj->Introduction();

?>