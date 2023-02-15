<?php 
$vote = $_REQUEST['vote'];

// get textfile content
$filename = "../pool_result.txt";
$content = file($filename);

// save content in an array
$array = explode("||", $content[0]);
$often = $array[0];
$not_often = $array[1];

if ($vote==0) {
    $often = $often+1;
}
if ($vote==1) {
    $not_often = $not_often+1;
}

// insert votes to text file
$insert = $often."||".$not_often;
$fp = fopen($filename, "w");
fputs($fp, $insert);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Often:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($often/($not_often+$often),2)); ?>%
</td>
</tr>
<tr>
<td>Not Often:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($not_often/($not_often+$often),2)); ?>'
height='20'>
<?php echo(100*round($not_often/($not_often+$often),2)); ?>%
</td>
</tr>
</table>