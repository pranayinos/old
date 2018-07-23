<?php
session_start();
if(isset($_SESSION['alogin']))
{
require("../database.php");
if(isset($_GET['id1']))
{
$qid=$_GET['id1'];
//echo $qid;
if(isset($_POST['ok']))
{

$query="DELETE FROM `mst_question` WHERE `que_id`=$qid";
$result=mysql_query($query);
if($result)
{
echo "<br><br> <hr width='60%'><h3 align='center'>Question with  Question ID = $qid Deleted</h3><hr width='60%'>";
unset($_GET['id1']);
}
}
else
{
?>
<div align="center" style="margin-top:100px">
<h3> Do you really want to delete this question "Question ID= <?php echo $qid; ?> "</h3>
<form action="#" name="delcnf" method="post">
<input type="submit" name="ok" value="&nbsp; &nbsp; ok &nbsp; &nbsp; " id="ok" />
</form>
</div> 

<?php
}
}
?><br />
<a href= "update.php"><h2 align="center">Go Back</h2></a>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>