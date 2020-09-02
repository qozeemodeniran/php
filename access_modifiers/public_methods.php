<?php

class student {
	public $name;
	public $dept;
	public $level;

	function set_name($n) {
		$this->name = $n;
	}
	protected function set_dept($d) {
		$this->dept = $d;
	}
	private function set_level($l) {
		$this->level = $l;
	}
}

$student1 = new student();
$student1->set_name("Qozeem Odeniran"); 
// $student1->set_dept("Computer Science"); // generate error
// $student1->set_level("Expert"); // generate error
?>