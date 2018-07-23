<?php
$user="root";
$pass="";
$con = new PDO('mysql:host=localhost;dbname=win2012',$user,$pass);
if (isset($_GET['Delete'])) 
{
$count = $con->exec("delete from login where user_name='$_GET[sel]'");
header("location:select_demo.php?cnt=$count");
} 
else if (isset($_GET['Update'])) 
{
header("location:Update.php?user_name=$_GET[sel]");
}
    else {
?>
<hr size="5" width="100%" color="red"/>
<center><h1>Welcome....</h1></center>
<hr size="5" width="100%" color="red" height="25px"/>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
<table align="center" bgcolor="teal" width="50%" border="1">
<tr>
<td>Select Any Name </td>
<td>
<select name="sel"><option>Select Name</option> 
<?php
    $user="root";
    $pass="";
    $con = new PDO('mysql:host=localhost;dbname=win2012',$user,$pass);
    $qr="select user_name from login";
    foreach($con->query($qr) as $row)
    {
        echo "<option value='$row[0]'>$row[0]</option>";
    }
    $con=null;  
?>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update" name="Update" />
<input type="submit" value="Delete" name="Delete" />
</td>
</tr>
<tr>
<td colspan="2" align="center">
<?php 
 if(isset($_GET['cnt']))
 {
    print("<font color='red'>Deleted $_GET[cnt] row</font>");
 }
?>
</td>
</tr>
</table>
</form>
<?php
}
?>