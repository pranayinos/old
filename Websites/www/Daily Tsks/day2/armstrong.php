<?php
echo "Armstrong between 1 and 500 are:<br>";
$num=500;
for($count=1;$count<=$num;$count++)
{	
	$arm=0;
	$dupli_count=$count;
	for($a=$count;$a>0;$a=(int)($a/10))
	{
		$rem=$a%10;
		$arm+=($rem*$rem*$rem);
	}
	if($dupli_count==$arm)
	{
		echo " $dupli_count is armstrong<br>";
	}
	
}
?>