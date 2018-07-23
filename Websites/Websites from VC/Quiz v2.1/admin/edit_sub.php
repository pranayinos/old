<?php
session_start();
if(isset($_SESSION['alogin']))
{
	require("../database.php");
	include("header.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function funupdate(id)
{
location='update_sub.php?id2='+id
}
function fundel(id)
{
location='delete_sub.php?id2='+id
}
</script>
</head>

<body>
<div align="center">
<?php


echo "<h3>Currently Available subjects</h3> ";

/*$query="SELECT `que_id` AS Q_Id,`set_id` AS Q_Set,`level`,`que_desc` AS Question_Desacription, `ans1` AS Opt_1, `ans2` AS Opt_1, `ans3` AS Opt_3, `ans4` AS Opt_4,`true_ans`AS RightOpt  FROM `mst_question` WHERE `test_id`='$test_id' ORDER BY set_id, level ";*/

$sql="SELECT sub_id AS Subject_ID, sub_name AS Subject_Name FROM `mst_subject`";
$data=mysql_query($sql);
echo "<table border='2' id='tbl'>";
$fc=mysql_num_fields($data);
for($i=0;$i<$fc;$i++)
{
$fname=mysql_field_name($data,$i);
echo "<th id='hdr'>$fname</th>";
}
echo "<th id='upd'>Update</th>";
echo "<th id='del'>Delete</th>";
while($rec=mysql_fetch_row($data))
{
echo "<tr>";
for($i=0;$i<$fc;$i++)
{
//echo "<tr><td>$rec[0]<td>$rec[1]<td>$rec[2]<td>$rec[3]<td>$rec[4]</tr>";
echo "<td align='center'>$rec[$i]</td>";
}

echo "<td><input type='button' value='Update' name='btnupdate' style='color:green' onclick=funupdate('$rec[0]')>";

echo "<td><input type='button' value='Delete' name='btnupdate' style='color:red' onclick=fundel('$rec[0]')>";
}
?>
</body>
</html>
<?php
	
	}
	 else
	 {
	 	header('location:index.php');
	 }
	?>