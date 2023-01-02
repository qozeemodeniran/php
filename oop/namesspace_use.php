<?php 
include "/Users/qozeemodeniran/Projects/web/php/oop/namespace.php";

$generation1 = new Odeniran\Generation();
$generation1->name = "Ahmed Odeniran";
$generation1->status = "Married";

$offispring1 = new Odeniran\Offspring();
$offispring1->number = 2;

$generation1->intro();
$offispring1->intro();
?>