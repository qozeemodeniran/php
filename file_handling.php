<?php
//The readfile()...
echo readfile("myself.txt");
echo "<br><br>";

//The fopen()...
$myfile = fopen("webdict.txt", "r") or die("Unabletoopen file.");
echo fread($myfile, filesize("webdict.txt"));
fclose($myfile);
echo "<br><br>";

//the fgets()...used to read first line of a file.
$myself = fopen("myself.txt","r") or die("Unable to open file!");
echo fgets($myself);
fclose($myself);
echo "<br><br>";

//The feof()...
$myself = fopen("myself.txt", "r") or die("Unable to open file");
while (!feof($myself)) 
{
	echo fgets($myself)."<br>";
}
fclose($myself);
echo "<br><br>";

//The fgetc() - used to read caharcter by character.
$myfile = fopen("webdict.txt", "r") or die("Unable to open file");
while (!feof($myfile)) {
	echo fgetc($myfile);
}
fclose($myfile);
echo "<br><br>";

//Creating and writing to file...
$mynewfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Qozeem Odeniran\n";
fwrite($mynewfile, $txt);
$txt = "Azeez Odeniran\n";
fwrite($mynewfile, $txt);
fclose($mynewfile);
?>