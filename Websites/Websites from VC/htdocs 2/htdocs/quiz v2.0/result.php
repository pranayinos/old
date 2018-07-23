<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$qry="SELECT answer.test_name, mst_user.username, answer.level, answer.c_ans,  answer.time FROM answer INNER JOIN mst_user ON answer.user_id=mst_user.user_id WHERE answer.user_id=$user_id"; 
$rs=mysql_query($qry,$cn) or die(mysql_error());

echo "<h1 class=head1> Result </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td align=center>Test Name </td><td align=center> User Name </td><td align=center> Correct Ans</td><td align=center> Level</td><td align=center> Time</td></tr>";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td align=center>$row[0] </td><td align=center> $row[1] </td><td align=center> $row[3]</td><td align=center> $row[2]</td><td align=center> $row[4]</td></tr>";
}
echo "</table>";
?>
</body>
</html>
