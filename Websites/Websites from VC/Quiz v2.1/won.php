<?php
session_start();
?>
<link href="quiz.css" rel="stylesheet" type="text/css">
<?php

if(isset($_SESSION['login'])&& isset($_SESSION['qn']))
{
	include("database.php");
	include("header.php");
	$qno=$_SESSION['qn'];
	$t_ans=$_SESSION['trueans'];
				echo "<h1 class=head1 align='center'>!! Congratulations !!</h1>";
				echo "<h2 class=head1 align='center'> Result</h2>";
				
				echo "<Table align=center><tr class=tot><td>Total Questions<td> $qno";
				echo "<tr class=tans><td>Correct Answers<td> $t_ans";
				//$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answers<td> ". $_SESSION['wrongans'];
				echo "<tr class=fans><td>Maximum Level = <td>".$_SESSION['level']; 
				echo "</table>";
				$tid=$_SESSION['tid'];
				$qrry= "SELECT test_name FROM mst_test WHERE test_id=$tid";
				$test=mysql_query($qrry,$cn) or die(mysql_error());
				$test_n=mysql_result($test,0);
				$user=$_SESSION['user_id'];
				$correct=$_SESSION['trueans'];
				$level=$_SESSION['level'];
				$query="INSERT INTO `exam`.`answer` (`user_id`, `level`, `c_ans`, `test_name`) VALUES ('$user', '$level', '$correct', '$test_n')"; 
				mysql_query($query,$cn) or die(mysql_error());
				
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
				exit;
}
?>