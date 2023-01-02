<?php 
// parent class
abstract class Odeniran {

    public $child;
    public function __construct($name) {
        $this->name = $name;
    }

    // abstract method(no action specified here) with a return type set to string
    abstract public function About() : string;
}

// child class
class Ahmed extends Odeniran {

    public function About() : string {
        // specify method's action here
        return "$this->name is the first child of Odeniran\n";
    }
}

// child class
class Azeezat extends Odeniran {

    public function About() : string {
        // specify method's action here
        return "$this->name is the second child of Odeniran\n";
    }
}

// child class
class Azeez extends Odeniran {

    public function About() : string {
        // specify method's action here
        return "$this->name is the third child of Odeniran\n";
    }
}

// child class
class Qozeem extends Odeniran {

    public function About() : string {
        // specify method's action here
        return "$this->name is the fourth child of Odeniran\n";
    }
}

// child class objects
$ahmed = new Ahmed("Ahmed Odeniran");
echo $ahmed->About();

$azeezat = new Azeezat("Azeezat Odeniran");
echo $azeezat->About();

$azeez = new Azeez("Azeez Odeniran");
echo $azeez->About();

$qozeem = new Qozeem("Qozeem Odeniran");
echo $qozeem->About();

?>
