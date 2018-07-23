<div align="center">
<?php
session_start();

if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}

include("header.php");
require("../database.php");
if(isset($_POST['sub']))
{
	$t_id=$_POST['t_id'];
	$t_name=$_POST['t_name'];
	$total_q=$_POST['total_q'];

	$sqlup="UPDATE `mst_test` SET `test_name`='$t_name' ,total_que=$total_q WHERE test_id='$t_id'";
	if(mysql_query($sqlup))
	{
		echo "Update Successful";
		unset($_POST['sub']);
		echo "<br><a href='edit_test_new.php'>Go Back</a>";
		exit();
	}
}
	
$tid=$_GET['id'];
//echo $qs;

$sqlstmt="select * FROM mst_test WHERE test_id='$tid'";
$data=mysql_query($sqlstmt);
$rec=mysql_fetch_row($data);

$str=<<<abc
<form method="post" action="#">
Test ID:<input type="text" name="t_id" value='$rec[0]' readonly style="background-color:#FF4D4D"><br>
Test Name :<input type="text" name="t_name" value='$rec[2]'><br>
No. of Questions:<input type="text" name="total_q" value='$rec[3]'><br><br>
<input type="submit" name="sub" value="Save">
</form>
abc;
echo $str;

?>
</div>