<?php

class Greeting
{
	public static function holla()
	{
		echo "Holla";
	}

	// public function __construct()
	// {
	// 	self::holla();
	// }
}

class NewClass
{
	public function message()
	{
		Greeting::holla();
	}
}

// new Greeting();
// Greeting::holla();

?>