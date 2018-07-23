<?php
class Animal
{
   public $name	;
   public $legs;
   function setName($name)
   {
	$this->name = $name;
   }
   function setLegs($legs)
   {
	$this->legs = $legs;
   }
   function __clone()
   {
	echo "<br/>Object Cloning in Progress";
   }
}
$tiger = new Animal();
$tiger->name = "Tiger";
$tiger->legs = 4; 
$kangaroo = clone $tiger;
$kangaroo->name = "Kangaroo";
$kangaroo->legs = 2;
echo "<br />".$tiger->name."---".$tiger->legs;
echo "<br />".$kangaroo->name."---".$kangaroo->legs;
?>