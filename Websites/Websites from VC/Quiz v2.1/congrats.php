<?php
session_start();
$_SESSION['nxt']=true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Next Level</title>
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
<font size="+6" id="wrong">New Achivement</font><hr /><br />
<span class="result"><br />
<?php 					$level=$_SESSION['level'];
						$level=$level+1;
						$_SESSION['level']=$level; 
?>
<font size="+3">Level <?php echo  $_SESSION[level]; ?>Unlocked</font><br />

<a href="quiz2.php">Next Question</a>
</center>
</body>
</html>
