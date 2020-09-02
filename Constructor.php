<?php

class brand
{
	public $name;
	public $year;

	function __construct($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return $this->name;
	}

}

$addos = new brand("Clothing");
echo "ADDOS deals with ".$addos->getName();
echo "<br><br>";
$ace_ventures = new brand("Toiletraries");
echo "ACE VENTURES deals with ".$ace_ventures->getName();

?>