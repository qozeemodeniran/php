<?php 
// create trait
trait greeting {

    // trait method and action
    public function greet() {
        echo "Holla, wwelcome to today's episode\n";
    }
}

trait query {
    public function questioning() {
        echo "Hey, what's your name?\n";
    }
}

// crete a class and use trait
class Welcome {
    use greeting;
}

$obj = new Welcome();
$obj->greet();


class Question {
    use query;
}

$obj2 = new Question();
$obj2->questioning();
?>