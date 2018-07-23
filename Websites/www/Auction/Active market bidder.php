<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="refresh" content="3">
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="UPPR" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    <title>uppAuction - Active Market</title>
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

<div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
<div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
  <table width="1024" height="44" border="0" align="center">
     <tr>
      <td width="170" align="center"><a href="Market List bidder.php">Market List</a></td>
      <td width="171" align="center" style="background-color: #00A652;">Active Market</td>
      <td width="170" align="center"><a href="Closed Market bidder.php">Closed Market</a></td>
      <td width="171" align="center"><a href="Won Bids bidder.php">Won Bids</a></td>
      <td width="157" align="center"><a href="change_password bidder.php">Settings</a></td>
      <td width="159" align="center"><a href="index.php"><?php
										echo $_COOKIE["user"]." logout";
										?></a></td>
    </tr>
  </table>
</div>

<div align="center" style="border: black; border-style: groove; height: 550px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >

<br />
<table width="1003" border="1" cellspacing="5" style="height: 20px; border-bottom: black;">
<tr align="right">
  <th  colspan="2" align="center" bgcolor="#FFFFFF" style="color:#333; font-family: 'Courier New', Courier, monospace; font-weight: bold; font-size: 18px;">PRODUCT INFORMATION</th>
  </tr>
<?php
include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");

$query = "SELECT Product_name, Description, stock, Base_price, min_increment, highest_bid FROM itemsactive";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
    ?>
<tr>
  <td width="186" height="27" align="right">Product Name :&nbsp;</td>
  <td width="796" height="27"><?php echo($row['Product_name']); ?> </td>
  </tr>
<tr>
  <td height="27" align="right">Product Description :&nbsp;</td>
  <td height="27"><?php echo($row['Description']); ?> </td>
  </tr>
<tr>
  <td height="27" align="right">Available Stock :&nbsp;</td>
  <td height="27"><?php echo($row['stock']); ?> </td>
  </tr>
<tr>
  <td height="27" align="right">Base Price :&nbsp;</td>
  <td height="27"> <?php echo ($row['Base_price']); ?> </td>
  </tr>
<tr>
  <td height="27" align="right">Minimum Increment:&nbsp; </td>
  <td height="27"><?php echo($row['min_increment']); ?> </td>
  </tr>
<tr>
  <td height="27" align="right">Remaining Time :&nbsp; </td>
  <td height="27">USe Java script </td>
  </tr>
<tr>
  <td height="27" align="right">Current Price :&nbsp; </td>
  <td height="27"><?php echo($row['highest_bid']); ?> </td>
  </tr>
<tr>
  <form action="bid.php" method="post">
  <td height="27" align="right"> Next Bid :&nbsp;</td>
  <td height="27" align="left"><input type="submit" name="nxtbid" value="        Next Bid        "/></td>
  </tr>

<tr>
    <td height="27" align="right"> Bid Amount :&nbsp;</td>
  <td height="27" align="left">Rs.
    <input  type="text" name="cbid" id="cbid" onkeypress="return isNumberKey(event)" />
      &nbsp;&nbsp; <input type="submit" name="sub" value="       Bid        "/></td>
  </tr>

<tr align="right"><td colspan="2"><center>
  <hr ></center></td>
  </tr>
<?php
mysql_close($link);
?>
</table>
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