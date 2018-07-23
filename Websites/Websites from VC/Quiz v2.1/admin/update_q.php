<div align="center">
<?php
session_start();
if(isset($_SESSION['alogin']))
{
if(isset($_GET['id1']))
{
$qs=$_GET['id1'];
//echo $qs;
require("../database.php");
$sqlstmt="select * from mst_question WHERE `que_id`='$qs'";
$data=mysql_query($sqlstmt);
$rec=mysql_fetch_row($data);

$str=<<<abc
<form method="post" action="update_q_save.php">
Question ID:<input type="text" name="q_id" value='$rec[0]' readonly style="background-color:#FF4D4D"><br>
Question Set No. :<input type="text" name="set_no" value='$rec[2]'><br>
Question Level:<input type="text" name="level" value='$rec[9]'><br>
Question Description:<input type="text" name="question" value='$rec[3]'><br>
Option 1 :<input type="text" name="opt1" value='$rec[4]'><br>
Option 2 :<input type= "text" name="opt2" value='$rec[5]'><br>
Option 3 :<input type= "text" name="opt3" value='$rec[6]'><br>
Option 4 :<input type= "text" name="opt4" value='$rec[7]'><br>
Correct Opt No.:<input type= "text" name="correct" value='$rec[8]'><br>

<input type="submit" name="sub" value="Save">
</form>
abc;
echo $str;
}

?>
</div>
<br />
<a href= "update.php"><h2 align="center">Go Back</h2></a>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>