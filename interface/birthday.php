<?php

interface Birthday
{
	public function birthMonth();
}

class person1 implements Birthday
{
	public function birthMonth()
	{
		echo "I was born in April<br>";
	}
}

class person2 implements Birthday
{
	public function birthMonth()
	{
		echo "I was born in March";
	}
}

$personA = new person1();
$personB = new person2();

$birthdays = array($personA, $personB);

foreach ($birthdays as $birthday) 
{
	$birthday->birthMonth();
}

?>