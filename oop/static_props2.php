<?php 
Class Shape {
    public static $pie = 3.142;

    public static function Area($radius) {
        return 2 * self::$pie * pow($radius, 2);
    }
}

$obj = new Shape();
echo $obj->Area(2);
?>