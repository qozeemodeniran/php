<?php 
// create class
class Intro {

    // static method
    public static function about() {
        echo "Hey, my name is Qozeem, and I am a student at GSU.\n";
    }
}

// another class
class greet {
    public static function greeting() {
        Intro::about();
    }
}
?>