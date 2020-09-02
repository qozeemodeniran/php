<?php

class student {
	public $name;
	public $level;

	function __construct($name, $level) {
		$this->name = $name;
		$this->level = $level;
	}

	function __destruct() {
		echo "The student's name is {$this->name}.";
		echo "<br>";
		echo "The student's level is {$this->level}";
	}
}

$qozeem = new student("Qozeem", "Expert");

?>