<hr width="100%" size="5" color="green"/>
<center><h1>Array Demo</h1> </center>
<hr width="100%" size="5" color="green"/>
<?php
$states = array("DotNet","C#");
array_push($states,"Core Java","J2EE");

print_r($states);
echo "<br>";
$states = array("C#","Java","PHP","VB");
   $state = array_pop($states); 
   print_r($states);

$grades = array(100,94.7,67,89,100);
   if (in_array("100",$grades)) 
      echo "Somebody studied for the test!";

function array_average($array) { 
    $retval = FALSE; 
    
    if(is_array($array) && count($array)) 
        $retval = array_sum($array) / count($array); 
    
    return $retval; 
} 
$scores = array('R' => 8.5, 'Jan' => 9.8, 'Terry' => 8.0); 

printf("<p>There are %d scores, totaling %.2f and averaging %.2f.</p>", 
count($scores), array_sum($scores), array_average($scores));   


?>