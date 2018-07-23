<?php
session_start();
extract($_SESSION);

include("database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Time out</title>
<style type="text/css">
#wrong {
	font-weight: bold;
	text-shadow: 3px 3px 2px #C9F;
	color: #F00;
}
.result {
	font-size: 24px;
	color: #F9F;
}
</style>
</head>

<body>

<center>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<font size="+6" id="wrong">You ran out of time</font><hr  width="60%"/><br />
<span class="result"><br />
<font size="+3">Your Result</font><br />
Maximum Level =<?php echo  $level; ?></font><br />
Correct awnsers =<?php echo  $trueans; ?></font></span><br />
<a href="index.php">Go Home</a>
</center>
</body>
</html>
<?php 
				
				$qrry= "SELECT test_name FROM mst_test WHERE test_id=$_SESSION[tid]";
				$test=mysql_query($qrry,$cn) or die(mysql_error());
				$test_n=mysql_result($test,0);
				$user=$_SESSION['user_id'];
				$query="INSERT INTO `exam`.`answer` (`user_id`, `level`, `c_ans`, `test_name`) VALUES ('$user', '$level', '$_SESSION[trueans]', '$test_n')"; 
				mysql_query($query,$cn) or die(mysql_error());
				
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				unset($_SESSION['q_arr']);
				unset($_SESSION[level]);
?>