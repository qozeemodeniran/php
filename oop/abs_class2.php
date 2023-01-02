<?php 
// parent class
abstract class Odeniran {

    public $child;
    public function __construct($name) {
        $this->name = $name;
        // $this->gender = $gender
    }

    // abstract method(no action specified here) with a return type set to string and argument
    abstract public function About($gender) : string;
}

// child class
class Ahmed extends Odeniran {

    public function About($gender) : string {
        // specify method's action here
        if($gender == "male") {
            $prefix = "Mr.";
        } elseif($gender == "female") {
            $prefix = "Mrs.";
        }
        return "$prefix $this->name is the first child of Odeniran\n";
    }
}

// child class
class Azeezat extends Odeniran {

    public function About($gender) : string {
        // specify method's action here
        if($gender == "male") {
            $prefix = "Mr.";
        } elseif($gender == "female") {
            $prefix = "Mrs.";
        }
        return "$prefix $this->name is the second child of Odeniran\n";
    }
}

// child class
class Azeez extends Odeniran {

    public function About($gender) : string {
        // specify method's action here
        if($gender == "male") {
            $prefix = "Mr.";
        } elseif($gender == "female") {
            $prefix = "Mrs.";
        }
        return "$prefix $this->name is the third child of Odeniran\n";
    }
}

// child class
class Qozeem extends Odeniran {

    public function About($gender) : string {
        // specify method's action here
        if($gender == "male") {
            $prefix = "Mr.";
        } elseif($gender == "female") {
            $prefix = "Mrs.";
        }
        return "$prefix $this->name is the fourth child of Odeniran\n";
    }
}

// child class objects
$ahmed = new Ahmed("Ahmed Odeniran");
echo $ahmed->About("male");

$azeezat = new Azeezat("Azeezat Odeniran");
echo $azeezat->About("female");

$azeez = new Azeez("Azeez Odeniran");
echo $azeez->About("male");

$qozeem = new Qozeem("Qozeem Odeniran");
echo $qozeem->About("male");

?>
