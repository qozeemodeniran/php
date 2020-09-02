<?php

abstract class ParenClass
{
	abstract protected function prefixName($name);
}

class ChildClass extends ParenClass
{
	public function prefixName($name, $separator=".", $greet="Dear")
	{
		if ($name == "Olaitan Odeniran") {
			$prefix = "Mr.";
		}
		elseif ($name == "Titilayo Odeniran") {
			$prefix = "Mrs.";
		}
		else
		{
			$prefix = "";
		}

		return "{$greet} {$prefix}{$separator} {$name}";
	}
}

$class = new ChildClass;
echo $class->prefixName("Olaitan Odeniran");
echo "<br>";
echo $class->prefixName("Titilayo Odeniran");

?>