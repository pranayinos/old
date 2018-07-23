<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="UPPR" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
	<title>uppAuction - Settings</title>
<style type="text/css">-a
a:hover{background-color: #ECFECB;}
a{color: #6F1702;text-decoration: none}
</style>
</head>
<?php
	if(isset($_COOKIE['user']))
    {
	   
?>
<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
      <td width="170" align="center"><a href="Market List bidder.php">Market List</a></td>
      <td width="171" align="center"><a href="Active Market bidder.php">Active Market</a></td>
      <td width="170" align="center" ><a href="Closed Market bidder.php">Closed Market</a></td>
      <td width="171" align="center"><a href="Won Bids bidder.php">Won Bids</a></td>
      <td width="157" align="center" style="background-color: #00A652;">Settings </td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>
<div align="center" style="border: black; border-style: groove; height: 300px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<br />
<h1 align="center" style="color: #000;">Password Changed Successfully</h1>
<hr  width="80%"/>
<br />
<?php
    include_once "db.php"; 
    $link=mysql_connect("$SERVER","$USER","$PASSWORD");
    mysql_select_db("$DATABASE");
	$passold=$_POST['passold'];
    $passnew=$_POST['passnew'];
    $passnewr=$_POST['passnewr'];
    if($passnew==$passnewr)
    {
        $name=$_COOKIE["user"];
        $query = "UPDATE login SET pass='$passnew' WHERE u_n='$name' AND pass='$passold'";
        $result = mysql_query($query);
    }
?>



</div>

<div style="margin-top: 10px;width: 1024px;height:200px"></div>
<div style="margin-top: 10px; background-color: #0000FF;; color:#000000; font-size: x-small;width: 1024px;">
<center>
  Best viewed on  Google Chrome 21 and higher<br/>At 1366 &times; 768 resolution <br />
copyright upp &copy; 2012 
</center></div>
<?php
}
else { header('location:index.php');
  }
?>  
</body>
</html>