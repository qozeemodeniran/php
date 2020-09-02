<?php
$a = 1;
$b = 2;
$c = 3;
echo "The value of a, b, and c is ".$a.", ".$b.", and ".$c." respectfully."."<br>";
echo "a is $a, b is $b and c is $c."."<br>";
echo "The sum of a, b and c is...";
echo " ".$a + $b + $c;
//Testing global variable scope...
function myVarGlobal(){
	echo $a; //This will cause an error.
}
myVarGlobal();
echo $a;//This will output a's value.
echo "<br>";
echo "<br>";
//Testing local variable scope...
function myVarLocal(){
	$x = 4;
	echo $x; //This will ouput x's value.
}
myVarLocal();
echo $x; //This will cause an error!!!
echo "<br>";
echo "<br>";
//To access global variable from withing a funtion, use "global" keyword.
function AccessGlobalVar(){
	global $a, $b, $c;
	$a = $b + $c;
}
AccessGlobalVar();
echo $a; //output 
echo "<br>";
echo "<br>";
//Another method to access global variable is using the $GLOBALS[index]
//where index is the variable name.
//Hence the above program is rewritten a follows...
function AccessGlobalVar2(){
	$GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['c']; 
}
AccessGlobalVar2();
echo $a; //outputs a's new value
echo "<br>";
echo "<br>";
//Using static keyword. 
//Static enables local variables not to be deleted
//so as to use them for further stuffs in future codes..
//the code below uses and reuses $z a few number of times.
function StaticKeyword(){
	static $z = 0;
	echo $z;
	$z++;
}
StaticKeyword();
echo "<br>";
StaticKeyword();
echo "<br>";
StaticKeyword();
?>