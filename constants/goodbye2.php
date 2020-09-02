<?php

class Goodbye
{
	const LEAVING_MESSAGE = "I just wanna say Goodbye from outside my class";

	public function byebye()
	{
		echo self::LEAVING_MESSAGE;
	}
}

$goodbye = new Goodbye();
$goodbye->byebye();

?>