<?php
include "conn.php";
$sql="select time from  answer";
$data=mysql_query($sql,$con);
while($rec=mysql_fetch_array($data))
{
$format="F j, Y g:h a";
echo date($format,$rec['time']);
echo "<br>";
}
?>
