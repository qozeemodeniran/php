<?php 
/**
 * public - the property or method can be accessed from everywhere. This is default
 * 
 * protected - the property or method can be accessed within the class and by classes derived from that class
 * 
 * private - the property or method can ONLY be accessed within the class
 */

 class Student{
    public $name;
    protected $major;
    private $grade;
 }

 $qozeem = new Student();
 $qozeem->name = "Qozeem Odeniran";
 try{
    echo $qozeem->name;
 } catch (Exception $e) {
    echo "Property not accessible" . $e->getMesssage();
 }

?>