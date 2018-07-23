<?php
if(isset($_GET['sub']))
{
    try
    {
    $user="root";
    $pass="";
    $con = new PDO('mysql:host=localhost;dbname=win2012', $user, $pass,array(PDO::ATTR_PERSISTENT=>true));
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $con->beginTransaction();
$qr = "insert into login values('$_GET[uname]','$_GET[upass]')";
$con->exec($qr);
$con->commit();
$val ="select * from login";

?>
<hr size="5" width="100%" color="red" />
<center><h1>Select All Record</h1></center>
<hr size="5" width="100%" color="red" />
<table border="1"  width="60%" align="center" bgcolor="#FF80FF"  >
<tr><td>User Name</td><td>Password</td></tr>

<?php
foreach($con->query($val) as $row)
{
echo "<tr><td >$row[0]</td><td>$row[1]</td></tr>";
    
}
echo "</table>";

$con=null;
}
catch (PDOException $e) {
     
    print "Failed: " . $e->getMessage() . "<br/>";
    die();
}
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