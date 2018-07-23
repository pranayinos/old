<?php
session_start();
if(isset($_SESSION['alogin']))
{
require("../database.php");
if(isset($_GET['id']))
{
	$tid=$_GET['id'];
	$sql="SELECT test_name FROM `mst_test` WHERE test_id=$tid";
	$t_name=mysql_result(mysql_query($sql),0);
if(isset($_POST['ok']))
{
//echo $qid;
$query="DELETE FROM `mst_test` WHERE `test_id`=$tid";
$query2="DELETE FROM `mst_question` WHERE `test_id`=$tid";

$result2=mysql_query($query2);
$result=mysql_query($query);

if($result&&$result2)
{
echo "<br><br> <hr><h3 align='center'>Test \"$t_name\" Deleted</h3><hr>";
}
else
{
	echo "<script>location='edit_test_new.php';</script>";
}
unset($_GET['id']);
}
else
{
?>
<div align="center" style="margin-top:100px">
<h3> Do you really want to delete this Test </h3> <h2>"<?php echo $t_name; ?> "</h2><h3>and all its questions</h3>
<form action="#" name="delcnf" method="post">
<input type="submit" name="ok" value="&nbsp; &nbsp; ok &nbsp; &nbsp; " id="ok" />
</form>
</div> 

<?php
}
}
?>
<br />
<a href= "edit_test_new.php"><h2 align="center">Go Back</h2></a>
</body>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>