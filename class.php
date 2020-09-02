<?php

class fruit
{
	// properties
	public $name;
	public $color;

	// methods
	function setName($name)
	{
		$this->name = $name;
	}
	function getName()
	{
		return $this->name;
	}

	function setColor($color)
	{
		$this->color = $color;
	}
	function getColor()
	{
		return $this->color;
	}
}



$apple = new fruit();
$apple->setName('Apple');
$apple->setColor('Red');

echo "Name: ".$apple->getName();
echo "<br>";
echo "Color: ".$apple->getColor();
echo "<br>";
var_dump($apple instanceof fruit);

?>