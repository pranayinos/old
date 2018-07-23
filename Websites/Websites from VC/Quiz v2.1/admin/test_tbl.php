<script>
function funupdate(id)
{
location='updatetest.php?id='+id
}
function fundel(id)
{
location='deletetest.php?id='+id
}
</script>
<?php
include("../database.php");
$sub_id = $_GET["q"];
$sql="SELECT * FROM `mst_test` WHERE sub_id=$sub_id";
$data = mysql_query($sql);
if(mysql_num_rows($data)<1)
{
	echo "<br><br><h3 class=head1> No tests are available under this subject</h3>";
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
?>
