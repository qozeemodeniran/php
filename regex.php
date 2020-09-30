<?php

//REGULAR EXPRESSION FUNCTIONS...
//preg_match()
$str = "Visit QozeemOdeniran.";
$pattern = "/qozeemodeniran/i";
echo preg_match($pattern, $str);
echo "<br><br>";
//preg_match_all()
$str2 = "Odeniran Qozeem is the last born of Mr Olaitan Odeniran and Mrs Titilayo Odeniran.";
$pattern2 = "/od/i";
echo preg_match_all($pattern2, $str2);
echo "<br><br>";
//preg_replace()
$str3 = "Qozeem Odeniran loves Lateefah very much.";
$pattern3 = "/lateefah/i";
echo preg_replace($pattern3, "Simbiat", $str3);
echo "<br><br>";
//Grouping...
$str4 = "Apples and banana";
$pattern4 = "/ba(na){2}/i";
echo preg_match($pattern4, $str4);
