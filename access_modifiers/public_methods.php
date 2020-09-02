<?php

class student {
	public $name;
	public $dept;
	public $level;

	function set_name($n) {
		$this->name = $n;
	}
	protectd function set_dept($d) {
		$this->dept = $d;
	}
	private function set_level($l) {
		$this->level = $l;
	}
}

$student1 = new student();
$this->set_name("Qozeem Odeniran"); 
$this->set_dept("Computer Science"); // generate error
$this->set_level("Expert"); // generate error
?>