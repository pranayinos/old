<?php
$num=$_GET['t1'];
$count=0;
for($i=2;$i<=$num;$i++)
{
	if( $num%$i==0)
	{
		
		$count++;
	}
}
if($count==1)
{
echo "given no is prime";
}
else
{
echo "given no is <b>not</b> prime";
}
?>
