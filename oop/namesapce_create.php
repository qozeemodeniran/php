<?php 
namespace Odeniran; 

class Generation {
    public $name = "";
    public $status = "";

    public function intro() {
        echo "{$this->name} is one of Odeniran's descendant, and martital status is {$this->status}.\n";
    }
}

class Offspring {
    public $number = 0;
    public function children() {
        echo {parent::$name} . " has {$this->number} of offspring(s)\n";
    }
}
?>