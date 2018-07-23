<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$l=mysql_connect("localhost","root","");
	mysql_select_db("try",$l);
	
	$n=$_POST[name];	
	$p=$_POST[pwd];
	$result=mysql_query("select name pwd from login where name='$n' and pwd='$p'",$l);
	$row=mysql_fetch_array($result);
	
	if($row)
	{
		//session_start();
		$_SESSION['out']=true;
		
		echo "<script> location='next.php' </script>" ;
	}
	else
	{
		
		echo "<h1>Try Again</h1>";
	}
?>
</body>
</html>