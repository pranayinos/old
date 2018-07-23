<?php
session_start();
if(isset($_SESSION['login']))
{
				unset($_SESSION['set_id']);
				unset($_SESSION['qn']);
				unset($_SESSION['level']);
				unset($_SESSION['trueans']);
				unset($_SESSION['q_arr']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include("header.php");
include("database.php");

extract($_GET);
extract($_POST);
$subject=$_POST['subject'];
$test=$_POST['test'];
if ($subject==0 || $test==0)
{
	echo "<h1 align=center><font color=red>No Testt Selected</font></h1><hr>";
	echo "<h2 class=head1> You have not selected a valid test or subject </h2><br><br>";
	?>
    <form action="sublist.php">
<input type="submit" value="Go Back">
</form><?php
exit();
}
$query = "SELECT sub_name FROM `mst_subject` WHERE sub_id=$subject";
$result= mysql_query($query);
$sub=mysql_result($result,0);
$query2 = "SELECT test_name FROM `mst_test` WHERE sub_id=$subject AND test_id=$test";
$result2= mysql_query($query2);
$tst=mysql_result($result2,0);
$query3 = "Select DISTINCT set_id FROM `mst_question` WHERE test_id=$test";
$result3= mysql_query($query3);


echo "<h1 align=center><font color=blue>You Selected</font></h1><hr>";
echo "<h2 class=head1> Subject  :  $sub <br> Quiz : $tst </h2><br><br>";

$set=mysql_num_rows($result3);//$q stores number of rows returned by querry -1 for random number generation
$random= rand(1,$set);
$_SESSION['sid']=$subject;
$_SESSION['tid']=$test;
$_SESSION['set_id']=$random;

?>

<div align="center">
<br>


<form action="sublist.php">
<input type="submit" value="Go Back">
</form>

<form action="quiz2.php">
<input type="submit" value="Start Test">
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