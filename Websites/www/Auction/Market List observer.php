<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="UPPR" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
	<title>uppAuction - Market List</title>
<style type="text/css">-a
a:hover{ background-image:;}
a{color: #6F1702;text-decoration: none}
</style>
</head>
<?php
	if(isset($_COOKIE['user']))
    {
	   
?>
<body alink="white" vlink="white" link="white">
<center>
<?php
include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");

?>
<div align="center" style="height: 90px; width:1024;"><img src="images/t1.jpg" alt="Logo" width="1024" height="89">
</div>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
    <tr>
      <td width="170" align="center" style="background-color: #00A652;">Market List</td>
      <td width="171" align="center"><a href="Active market observer.php">Active Market</a></td>
      <td width="170" align="center" ><a href="Closed Market observer.php">Closed Market</a></td>
      <td width="157" align="center"><a href="change_password observer.php">Settings</a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>

<div align="center" style="border: black; border-style: groove; height: 550px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >

<br />

<table width="1001" border="1" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr>
  <th width="48" height="27" align="center" valign="middle"> Sr.No.</th>
  <th width="155" align="center" valign="middle">Product Name</th>
  <th width="417" align="center" valign="middle">Product Description </th>
  <th width="126" align="center" valign="middle">Available Stock</th>
  <th width="84" align="center" valign="middle">Base Price</th>
  <th width="110" align="center" valign="middle">Min. Increment</th>
  </tr>
<?php
include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");

$query = "SELECT Sr_No, Product_name, Description, stock, Base_price, min_increment FROM items";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Sr_No'] . "</td>";
  echo "<td>" . $row['Product_name'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo "<td>" . $row['stock'] . "</td>";
  echo "<td>" . $row['Base_price'] . "</td>";
  echo "<td>" . $row['min_increment'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysql_close($link);
?> 
</form></div>


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