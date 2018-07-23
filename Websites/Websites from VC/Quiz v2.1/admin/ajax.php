<?php
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("exam",$cn)  or die("Could not connect to Database");
$sub_id = $_GET["q"];
$sql="SELECT * FROM `mst_test` WHERE `sub_id`='$sub_id'";
$result = mysql_query($sql);
?>
<select name="test" id="test" style="width:520px">
<?php
while($row=mysql_fetch_array($result))
{
$id=$row['test_id'];
$test=$row['test_name'];
echo '<option value="'.$id.'">'.$test.'</option>';
}
?>
</select>