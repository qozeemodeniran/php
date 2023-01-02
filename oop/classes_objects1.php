<?php 
class Odeniran {
    public $name;
    public $status;

    function set_prop($name, $status) {
        $this->name = $name;
        $this->status = $status;
    }

    function get_name() {
        return $this->name;
    }

    function get_status() {
        return $this->status;
    }
}

$child1 = new Odeniran();
$child1->set_prop("Odeniran Ahmed", "Married");

echo $child1->get_name() . " is the first son of Odeniran, and his marital status is " . $child1->get_status() . ".";
?>