<?php

class pi
{
	public static $value = 3.14159;
}

class x extends pi
{
	public function xStatic()
	{
		return parent::$value;
	}
}

// getting static prop value via x(it's child)...
	echo x::$value;

	// ...or via xStatic method.
	$x = new x();
	echo $x->xStatic();

?>