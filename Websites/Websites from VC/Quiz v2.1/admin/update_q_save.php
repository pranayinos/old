<?php
session_start();
if(isset($_SESSION['alogin']))
{
if(isset($_POST['sub']));
{
	require("../database.php");
	
	$q_id=$_POST['q_id'];
	$set_no=$_POST['set_no'];
	$level=$_POST['level'];
	$ques=$_POST['question'];
	$opt1=$_POST['opt1'];
	$opt2=$_POST['opt2'];
	$opt3=$_POST['opt3'];
	$opt4=$_POST['opt4'];
	$correct=$_POST['correct'];
		
	 $stmt="UPDATE mst_question SET `set_id`=$set_no, `que_desc`='$ques', `ans1`='$opt1', `ans2`='$opt2', `ans3`='$opt3', `ans4`='$opt4', `true_ans`='$correct',`level`='$level' WHERE `que_id`=$q_id";
 //echo $stmt;
 if(mysql_query($stmt))
 {
 echo"<br><br> <hr><h3 align='center' >Data updated Successfully </h3><hr>";
 }
 else
 {
  echo" data not updated ";
 }
 
 
}
?>
<a href="update.php" ><h2 align="center"> Go Back</h2></a>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>