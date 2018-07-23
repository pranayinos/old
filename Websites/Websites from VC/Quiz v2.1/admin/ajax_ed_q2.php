<script>
function funupdate(Studid)
{
location='update_q.php?id1='+Studid
}
function fundel(Sid)
{
location='delete_q.php?id1='+Sid
}
</script>
<style>
#tbl
{
	background-color:#CFF;
	border-color:#6699FF;
	border-radius:2
}
#hdr
{
	color: #00F;
	background-color: #C9F
}
#upd
{
	color: #0F0
	background-color: #C9F
}
#del
{
	color: #F00;
	background-color: #C9F
}
</style>
<?php
require("../database.php");
$test_id = $_GET["q"];
if($test_id <= 0)
{
	echo"<div>Select test from drop down to view questions</div>";
	exit();
}

$sql_n="SELECT test_name FROM `mst_test` WHERE `test_id`='$test_id'";
$result=mysql_query($sql_n);
$name=mysql_result($result,0);
echo "Listing of all questions of $name Test ";

$query="SELECT `que_id` AS Q_Id,`set_id` AS Q_Set,`level`,`que_desc` AS Question_Desacription, `ans1` AS Opt_1, `ans2` AS Opt_1, `ans3` AS Opt_3, `ans4` AS Opt_4,`true_ans`AS RightOpt  FROM `mst_question` WHERE `test_id`='$test_id' ORDER BY set_id, level ";

$sql="SELECT * FROM `mst_question` WHERE `test_id`='$test_id'";
$data=mysql_query($query);
if(mysql_num_rows($data)<1)
{
	echo "<br><br><h3 class=head1> No questions to display under this test</h3>";
	exit;
}
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