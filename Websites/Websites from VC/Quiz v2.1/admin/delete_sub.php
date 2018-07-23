<?php
session_start();
if(isset($_SESSION['alogin']))
{
require("../database.php");
if(isset($_GET['id2']))
{
	$sid=$_GET['id2'];
	$sql="SELECT sub_name FROM `mst_subject` WHERE sub_id=$sid";
	$s_name=mysql_result(mysql_query($sql),0);

//echo $qid;
if(isset($_POST['ok']))
{

$query="DELETE FROM `mst_subject` WHERE sub_id = $sid";
$query2="DELETE FROM `mst_test` WHERE `sub_id`=$sid";
$query3="DELETE FROM `mst_question` WHERE test_id IN (SELECT test_id FROM mst_test WHERE sub_id=$sid)";

$result3=mysql_query($query3);
$result2=mysql_query($query2);
$result=mysql_query($query);
if($result && $result2 && $result3)
{
echo "<br><br> <hr width='60%'><h3 align='center'>$s_name Deleted Successfully</h3><hr width='60%'>";
unset($_GET['id2']);
}
}
else
{
?>
<div align="center" style="margin-top:100px">
<h3> Do you really want to delete </h3> <h2><u>"<?php echo $s_name; ?>" </u></h2><h3>and all the tests and questions in it</h3>
<form action="#" name="delcnf" method="post">
<input type="submit" name="ok" value="&nbsp; &nbsp; ok &nbsp; &nbsp; " id="ok" />
</form>
</div> 

<?php
}
}
?><br />
<a href= "edit_sub.php"><h4 align="center">Go Back</h4></a>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>