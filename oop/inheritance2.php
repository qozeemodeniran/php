<?php 
// create parent class
class Faculty {
    // parent class public properties 
    public $faculty,$department;

    // constructor to initialise class properties
    public function __construct($faculty, $department) {
        $this->faculty = $faculty;
        $this->department = $department;
    }

    // protected method: can only be accessed withing the class or classes derived from the paret class
    protected function About() {
        echo "The department of {$this->department} falls under the faculty of {$this->faculty}.\n";
    }
}

// create child class which inretits public and protected methods and attributes from the class above (parent class)
class Department extends Faculty{
    // child class method
    public function Intro() {
        echo "Holla, welcome to the depratment of {$this->department}. \n";

        // Call protected method from within derived class
        $this -> About();
    }
}

// create ojbect of the child class
$it = new Department("Colledg of Engineering & Technology", "Information Technology");

// use object to call child class method
$it->Intro();

// use object to call parent class method: Call to protected method Faculty::About() from context
// $it->About(); 

echo "-----------------------------\n";
$cs = new Department("Colledg of Engineering & Technology", "Computer Science");
$cs->Intro();
// $cs->About();
?>