<?php
	if (0) 
    {

	} 
    else
     {
?>
<hr width="100%" size="5" color="red"/>
<center><h1>Update DEMO </h1></center>
<hr width="100%" size="5" color="red"/>
<?php
if(isset($_GET['user_name']))
{
$user="root";
$pass="";
$con = new PDO('mysql:host=localhost;dbname=win2012',$user,$pass);
$qr="select * from login where user_name='Deepak'";
foreach($con->query($qr) as $row)
{
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
<table bgcolor="silver" align="center" border="1">
<tr>
<td colspan="2" align="center"><b>Update Login Detail</b></td>
</tr>
<tr>
<td>User name</td>
<td><input type="text" name="uname" value="<?php echo $row[0]; ?>"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="upass" value="<?php echo $row[1]; ?>" /> </td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Submit" /></td>
<td><input type="reset" /></td>
</tr>
</table>
 </form>
 
<?php
}
}
}
?>