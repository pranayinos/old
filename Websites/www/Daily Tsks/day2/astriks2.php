<?php
$num=$_GET['t1'];
for($line=$num;$line>=1;$line--)
{
	for($no_char=$line;$no_char>=1;$no_char-=1)
	{
		echo "*";
	}
	echo"<br>";
}
?>