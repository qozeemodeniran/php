<?php

class Faculty
{
	public  $name;
	public $year;

	public function __construct($name, $year)
	{
		$this->name = $name;
		$this->year = $year;
	}

	public function intro()
	{
		echo "The department's name is {$this->name} and was created in {$this->year}.";
	}
}

class Department extends Faculty
{
	public $duration;

	// method overriding...
	public function __construct($name, $year, $duration)
	{
		$this->name = $name;
		$this->year = $year;
		$this->duration = $duration;
	}

	// method overriding...
	public function intro()
	{
		echo "The department's name is {$this->name}, created in {$this->year}, and 
		the duration of the degree is {$this->duration} years.";
	}
}

$department = new Department("Computer Science", 2010, 4);
$department->intro();

?>