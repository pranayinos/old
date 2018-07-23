<?php
require "../testimonials_files/db.php";
$id=$_SERVER['QUERY_STRING'];
echo "<h1>$id</h1>";
$qry="UPDATE posts SET approved = 1 WHERE id=$id";
$res=mysql_query($qry,$res);
if($res)
{?>
	<script> location='index.php' </script><?php
}
?>