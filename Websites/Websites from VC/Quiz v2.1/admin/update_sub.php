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
	$s_id=$_POST['s_id'];
	$s_name=$_POST['s_name'];
	$sqlup="UPDATE `mst_subject` SET `sub_name`='$s_name' WHERE sub_id='$s_id'";
	if(mysql_query($sqlup))
	{
		echo "<h3>Update Successful</h3>";
		unset($_POST['sub']);
		echo "<br><a href='edit_sub.php'>Go Back</a>";
		exit();
	}
}
	
$sid=$_GET['id2'];
//echo $qs;

$sqlstmt="select * FROM mst_subject WHERE sub_id='$sid'";
$data=mysql_query($sqlstmt);
$rec=mysql_fetch_row($data);

$str=<<<abc
<form method="post" action="#">
Subject ID:<input type="text" name="s_id" value='$rec[0]' readonly style="background-color:#FF4D4D"><br>
Subject Name :<input type="text" name="s_name" value='$rec[1]'><br>

<input type="submit" name="sub" value="Save">
</form>
abc;
echo $str;

?>
</div>