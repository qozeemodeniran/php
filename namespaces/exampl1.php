<?php

namespace Html;
class Table
{
	public $title = "";
	public $numRows = 0;
	public function message()
	{
		echo "<p>Table <strong>{$this->title}</strong> has <strong>{$this->numRows}</strong> rows.</p";
	}
}

$table = new Table();
$table->title = "Data Table";
$table->numRows = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$table->message();
?>
</body>
</html>