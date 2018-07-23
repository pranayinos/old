<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="hpeduction" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
	<title>uppAuction - Delete User</title>
<style type="text/css">-a
a:hover{background-color: #ECFECB;}
a{color: #6F1702;text-decoration: none}
</style>
</head>
<?php
	if(isset($_COOKIE['user']))
    {if(isset($_POST['sub'])){
 ?>
       
<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<?php
include_once "db.php"; 
$u_name	=  $_POST['u_n'];
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
$qr="delete from login where u_n='$u_name'";
$result = mysql_query($qr);
//echo "Look for the user in the users table.";
?>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
      <td width="157" align="center"><a href="Create User.php">Create User </td>
      <td width="170" align="center" style="background-color: #00A652;"><a href="delete user.php">Delete User</a></td>
      <td width="171" align="center"><a href="change_password admin.php">Settings </a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>
<div align="center" style="border: black; border-style: groove; height: 300px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #000;"><u><?php if($result)
 {echo $u_name;}  else {"not";}?></u> Successfully Deleted</h1>
<hr  width="80%"/>
<br />
<form method="post" action="Delete User.php">
<table width="500" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr><td height="45" colspan="2" align="center"><center><br ><input type="submit" name="Delete" value="Delete More"/></center></td></tr>
</table>
</form></div>
<?php
	if(isset($_POST['Delete']))
    {
        unset($_POST['sub']);
    }
?>

<div style="margin-top: 10px; background-color: #0000FF;; color:#000000; font-size: x-small;width: 1024px;">
<center>
  Best viewed on  Google Chrome 21 and higher<br/>At 1366 &times; 768 resolution <br />
copyright upp &copy; 2012 
</center></div>
       <?php
      } else if (isset($_POST['Update'])) 
{
header("location:Update.php?user_name=$_GET[sel]");
}
	else{
?>

<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
       <td width="157" align="center"><a href="Create User.php">Create User </td>
      <td width="170" align="center" style="background-color: #00A652;"><a href="delete user.php">Delete User</a></td>
      <td width="171" align="center"><a href="change_password admin.php">Settings</a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>
<div align="center" style="border: black; border-style: groove; height: 300px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<h1 align="center" style="color: #000;">Delete User</h1>
<hr  width="80%"/>
<br />
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr>
  <td> &nbsp;&nbsp;Select User Name</td>
  <td align="center">                       <select name="u_n" style="width: 180px;">
                                            <?php
  
                                            include_once "db.php"; 
                                            $con = new PDO('mysql:host=localhost;dbname=inos',$USER,$PASSWORD);
                                            $qr="select u_n from login";
                                            foreach($con->query($qr) as $row)
                                            {
                                            echo "<option value='$row[0]'>$row[0]</option>";
                                            }
                                            $con=null;
                                            ?> 
                                            </select> &nbsp; &nbsp; </td></tr>

<tr><td height="45" colspan="2" align="center"><center><br ><br ><br ><br ><input type="submit" name="sub" value="Delete"/></center></td></tr>
</table>
</form></div>

<div style="margin-top: 10px; background-color: #0000FF;; color:#000000; font-size: x-small;width: 1024px;">
<center>
  Best viewed on  Google Chrome 21 and higher<br/>At 1366 &times; 768 resolution <br />
copyright upp &copy; 2012 
</center></div>
<?php
}
}
else { header('location:index.php');
  }
?>  
</body>
</html>