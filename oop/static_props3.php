<?php 
class Shape {
    public static $pie = 3.142;
}

class Circle extends Shape {
    public function Area($radius) {
        // To call a static property from a child class, use the parent keyword inside the child class:
        return 2 * parent::$pie * pow($radius, 2);
    }
}

$area_of_circle = new Circle();

echo $area_of_circle->Area(2);

?>