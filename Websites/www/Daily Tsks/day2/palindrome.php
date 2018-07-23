<?php
$num=$_GET['t1'];
if(strlen($num)==5)
{
$pali=strrev($num);
if($num==$pali)
{
	echo "given no is palindrome";
}
else
{
	echo "given no is not palindrome.";
}
}
else
{
	echo "error";
}
?>