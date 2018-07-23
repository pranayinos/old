<?php 
session_start();

$_SESSION['array']=array(1, 2, 3);
$x=3;
$_SESSION['array'][$x]="yes";


?>
<a href="next.php">Next</a>