<?php 
class Circle {
    public static $pie = 3.142;
    public static $radius = 10;
}

$area = Circle::$pie * (Circle::$radius * Circle::$radius);

echo $area;

?>