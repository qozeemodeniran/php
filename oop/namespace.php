<?php 
namespace Odeniran;

class Children {
    public $lastname = "";
    public $number = 0;

    public function intro() {
        echo "The {$this->lastname}'s family has {$this->number} of offspring";
    }
}

$child = new Children();
$child->lastname = "Odeniran";
$child->number = 5;

$child->intro();
?>