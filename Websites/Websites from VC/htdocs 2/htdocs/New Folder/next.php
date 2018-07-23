<?php 
session_start();

echo $_SESSION['array'][0] . ", " .$_SESSION['array'][1].", ". $_SESSION['array'][2];

echo "<br/>".$_SESSION['array']."<br>";
$arrlength=count($_SESSION['array']);
$str="(";

	for($x=0;$x<$arrlength;$x++)
  {
  $str=$str.$_SESSION['array'][$x];
  if($x<($arrlength-1))
  {
  $str=$str.", ";
  }
  }
 $str=$str.")";

echo "<br>".$str;
?>