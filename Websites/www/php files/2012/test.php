<?php
if(isset($_GET['sub']))
{
    $link = mysql_connect("localhost","root","") ;
if(!$link)
{
    echo "Mysql not connected";
}
if(!mysql_select_db("win2012"))
{
    echo "Database not connected";
}
$qr = "insert into login values('$_GET[uname]','$_GET[upass]')";
$result = mysql_query($qr,$link);
if($result)
{
    echo "Thank You!!!!!!";
    echo "<a href='select_demo.php'>Update Delete</a>";
}
else
{
    echo "Record Not Saved";
}

$res = "select * from login";
$val = mysql_query($res);
?>
<table border="1"  width="40%" align="center" bgcolor="silver" >
<tr><td align="center"><b>User Name</b></td><td align="center"><b>Password</b></td></tr>

<?php

while($row=mysql_fetch_row($val))
{
echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
    
}
echo "</table>";
mysql_close($link);
}
else
{?>
<hr width="100%" size="5" color="red"/>
<center><h1>SQL DEMO </h1></center>
<hr width="100%" size="5" color="red"/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
<table bgcolor="silver" align="center" border="1">
<tr>
<td colspan="2">User Login  Detail</td>

</tr>
<tr>
<td>User name</td>
<td><input type="text" name="uname"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="upass" /> </td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Submit" /></td>
<td><input type="reset" /></td>
</tr>


</table>

 </form>


    <?php
}


?>