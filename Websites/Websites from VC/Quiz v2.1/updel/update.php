<?php
if(isset($_GET['id']))
{
$sid=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("student_db");
$query="DELETE FROM tbl_studinfo WHERE Stud_Id = $sid";
$result=mysql_query($query);
if($result)
{
echo "Row with stud_id = $sid Deleted";
}
unset($_GET['id']);?>
<a href= "update.php">Go Back</a>
<?php
}else
{
?>
<script>
function funupdate(Studid)
{
location='update1.php?id='+Studid
}
function fundel(Sid)
{
location="update.php"+"?id="+Sid;
}
</script>
<style>
th{
color:#FF0000;
}
table{
border-color:#FFFF66;
}
</style>
<?php
mysql_connect("localhost","root","");
mysql_select_db("student_db");
$sqlstmt="select * from tbl_studinfo";
$data=mysql_query($sqlstmt);
echo "<table border='2'>";
$fc=mysql_num_fields($data);
for($i=0;$i<$fc;$i++)
{
$fname=mysql_field_name($data,$i);
echo "<th>$fname</th>";
}
echo "<th>Update</th>";
echo "<th>Delete</th>";
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
}
?>