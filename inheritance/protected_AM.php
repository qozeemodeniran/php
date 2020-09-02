<?php

class Faculty
{
	public $name;
	public $year;

	public function __construct($name, $year)
	{
		$this->name = $name;
		$this->year = $year;
	}

	protected function intro()
	{
		echo "The department's name is {$this->name} and was created in {$this->year}.";
	}
}

class Department extends Faculty
{
	public function message()
	{
		echo "I am a department in the faculty.";

		$department->intro(); // calling protected method from derived class works.
	}
}

$department = new Department("Computer Science", 2010);
$department->message();
echo "<br>";
// $department->intro(); calling protected method outside the parent or subclass gives error.
?>