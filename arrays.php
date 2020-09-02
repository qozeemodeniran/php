<?php
$languages = array("Yoruba","English","French");
//sorting array inascending order...
sort($languages);
echo "I speak ".$languages[0].", ".$languages[1]." and ".$languages[2]." fluenty<br>";
echo "The length of the array is ".count($languages);//outputs the length of the array..
echo "<br><br>";
//sorting array in descending order...
$values = array(9,1,4,2,7,3,5,10,8,6);
rsort($values);
$length = count($values);
for($itr = 0; $itr < $length; $itr++)
{
	echo $values[$itr].",";
}
echo "<br><br>";
//looping through indexed array
$arrlength =count($languages);
for ($x=0; $x < $arrlength ; $x++) { 
	echo $languages[$x]."<br>";
}
echo "<br><br>";
//associative array
$nameAge = array("Ahmed"=>"32","Azeezat"=>"30","Qozeem"=>"26","Azeez"=>"28");
//sorting associative array in ascending order according to value...
asort($nameAge);
echo "Qozeem is ".$nameAge['Qozeem']. " years Old<br><br>";
foreach ($nameAge as $name => $age) {
	echo $name." ".$age."<br>";
}
echo "<br><br>";
//sorting associative array in ascending order according to key
ksort($nameAge);
foreach ($nameAge as $name => $age) {
	echo $name." is ".$age." years old.<br>";
}
echo "<br><br>";
//multidimensional array...
$students = array(
array("Qozeem Odeniran", "Computer Science", "3.40"),
array("Azeez Aremu", "Computer Science", "3.30"),
array("Toyosi Afolabi", "Mass Communication", "3.50")
);

echo $students[0][0]." | ".$students[0][1]." | ".$students[0][2]."<br>";
echo $students[1][0]." | ".$students[1][1]." | ".$students[1][2]."<br>";
echo $students[2][0]." | ".$students[2][1]." | ".$students[2][2]."<br>";
echo "<br><br>";
//multidimensional array - using for-loop to access array element...
for ($row=0; $row < 3 ; $row++) 
{ 
	echo "Student $row";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) 
	{
    echo "<li>".$students[$row][$col]."</li>";
}
  echo "</ul>";
}
?>