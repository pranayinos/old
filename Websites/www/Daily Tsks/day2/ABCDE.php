<?php
$num=$_GET['t1'];
for($line=1;$line<=$num;$line++)
{
	$char="A";
	for($no_char=1;$no_char<=$line;$no_char+=1)
	{
		echo  "$char";
		$char++;
	}
	echo "<br>";
}
?>