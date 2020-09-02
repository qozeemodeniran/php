<?php

abstract class Month
{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	abstract public function intro() : string;
}

class April extends Month
{
	public function intro() : string
	{
		return "- Being a Taurus born on April 28th, your personality is defined by a determined and stable nature. I'm am $this->name!";
	}
}

class March extends Month
{
	public function intro() : string
	{
		return "- Being a Pisces born on March 12th, your personality is characterize by passion and experimentation. I'm $this->name!";
	}
}

$april = new april("Taurus");
echo $april->intro();
echo "<br>";

$march = new march("Pisces");
echo $march->intro();

?>