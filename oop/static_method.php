<?php 
// create class
class Intro {

    // static method
    public static function about() {
        echo "Hey, my name is Qozeem, and I am a student at GSU.\n";
    }

    // another static method
    public static function major() {
        echo "I am majoring in IT.\n";
    }

    // non-static method
    public function __construct() {
        // using static method in the same class
        self::major();
    }
}

// call static method
Intro::about();

new Intro();
?>