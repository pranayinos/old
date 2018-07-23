<?php
$sdb=$_POST['drpdb'];
$stable=$_POST['drptable'];
?>
<form method="post" action="">
<select name="drpdb" onChange="submit()">
<?php
mysql_connect("localhost","root","");
$dbs=mysql_list_dbs();
while($db=mysql_fetch_row($dbs))
{
  if($dbs==$db[0])
  echo "<option selected>$db[0]</option>";
  else
  echo "<option>$db[0]</option>";
}
?>
</select>