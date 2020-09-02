<?php

class student {
	public $dept;
	private $name;
	protected $level;
}

$qozeem = new student();
$qozeem->name = "Qozeem Odeniran"; // generates error 
$qozeem->dept = "IT";
$qozeem->level = "Junior"; // generates error

?>