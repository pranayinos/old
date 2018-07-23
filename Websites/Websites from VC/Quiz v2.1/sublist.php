<?php
session_start();
if(isset($_SESSION['login']))
{
				unset($_SESSION['sid']);
				unset($_SESSION['tid']);
				unset($_SESSION['set_id']);
				unset($_SESSION['qn']);
				unset($_SESSION['level']);
				unset($_SESSION['trueans']);
				unset($_SESSION['q_arr']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta name="author" content="Pranay Soni">
<script language="javascript">
function showHint(str)
{
var xmlhttp;
if (str.length==0)
{
document.getElementById("testdiv").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("testdiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","ajax.php?q="+str,true);
xmlhttp.send(null);
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
/*====================================================================================================
$sel_sql="select * from `mst_subject`";
$sel_exe=mysql_query($sel_sql);
echo "<table align=center>";
while($row=mysql_fetch_row($sel_exe))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";=======================================================================================*/

$sel_sql="select * from `mst_subject`";
$sel_exe=mysql_query($sel_sql);
?>
<div align="center">
<form method="POST" name="frm" action="showtest.php">
Select Subject:-
<select name="subject" id="subject" onChange="showHint(this.value);" style="width:140px">
<option value="0">--Select Subject--</option>


<?php while($sel_rows=mysql_fetch_array($sel_exe))
{
?>
<option value="<?php echo $sel_rows['sub_id']; ?>">
<?php echo $sel_rows['sub_name']; ?>
</option>
<?php  }   ?>
</select>
<br><br>
<div style="width:240px">
<div style="float:left">
Select Test:</div>      
<div id="testdiv" style="float:right">
<select name="test" id="test" style="width:140px">
<option value="0">--Select Test--</option>
<option></option>

</div></select>
</div></div><br>
<div id="button" align="center">
<div align="center">
<input type="submit" value="Next" name="next" align="middle">
</div>
</form>
</div>
</body>
</html>
<?php 
}
else
{
	?><script> location='index.php'; </script>
<?php }?>  