<?php
session_start();
extract($_SESSION);
$sub=$_POST['submit'];
include("database.php");
if($submit=='Finish')
{
	//mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
				unset($_SESSION['qn']);
				unset($_SESSION['sid']);
				unset($_SESSION['tid']);
				unset($_SESSION['trueans']);
				unset($_SESSION['q_arr']);
				unset($_SESSION['level']);
	header("Location: index.php");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
echo "<h1 class='head1'> Review Test Question</h1>";
$submit=$_POST['submit'];
if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if($submit=='Next Question' )
{
	$_SESSION['qn']=$_SESSION['qn']+1;
	
}
$qn=$_SESSION['qn'];
$q=$_SESSION['q_arr'][$qn];
//echo $q;
$query="SELECT * FROM mst_question WHERE que_id ='$q' ";
$rs=mysql_query($query,$cn) or die(mysql_error());
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";

$n=$_SESSION['qn']+1;
echo "<tr><td><span class=style2>Que ".  $n .": $row[3]</style>";
echo "<tr><td class=".($row['7']==1?'tans':'style8').">$row[4]";
echo "<tr><td class=".($row['7']==2?'tans':'style8').">$row[5]";
echo "<tr><td class=".($row['7']==3?'tans':'style8').">$row[6]";
echo "<tr><td class=".($row['7']==4?'tans':'style8').">$row[7]";
$t_id=$_SESSION['tid'];
$qry="SELECT * FROM mst_question WHERE test_id ='$t_id' ";
$res=mysql_query($qry,$cn) or die(mysql_error());
if($_SESSION['qn']<mysql_num_rows($res)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Finish'></form>";

echo "</table></table>";
?>