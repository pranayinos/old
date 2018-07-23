<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="UPPR" />
    <link  rel="icon" type="image/png" href = "images/dice.png"/>
	<title>uppAuction - Bid Successful</title>
<style type="text/css">-a
a:hover{background-color: #ECFECB;}
a{color: #6F1702;text-decoration: none}
</style>
</head>
<body alink="white" vlink="white" link="white">
<center><div align="center" style="height: 90px; width:1024"> 
<img src="images/t1.jpg" alt="Logo" width="1036" height="89">
</div>
    <div style="background-repeat: no-repeat; height: 45px; width:1024; background-image:url(images/menu.jpg); background-position:center; color: #FFF;">
    </div>
<div align="center" style="border: black; border-style: groove; height: 200px; width: 1024px; margin-top:3px;  padding-top: 5px;"  >
<?php
if(isset($_COOKIE['user']))
    {
if (isset($_POST['sub']))
{

include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
//echo "Look for the user in the users table.";
$query = "SELECT Sr_No, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder, min_increment FROM itemsactive";$result = mysql_query($query);
// Has the user been located?
$row = mysql_fetch_array($result);

$bid=$_POST['cbid'];
$srno=$row['Sr_No'];
$hb=$row['highest_bid'];
$shb=$row['second_highest_bid'];
$thb=$row['third_highest_bid'];
$h=$row['highest_bidder'];
$s=$row['second_bidder'];
$t=$row['third_bidder'];
$min=$row['min_increment'];

$rem=$bid % $min;
if($bid > $hb || $rem==0)
{
$thb=$shb;
$shb=$hb;
$hb=$bid;
$t=$s;
$s=$h;
$h=$_COOKIE["user"];
//echo " current bid " .$hb. " bidder ".$h;


$query2 = "UPDATE itemsactive SET highest_bid='$hb', second_highest_bid='$shb', third_highest_bid='$thb', highest_bidder='$h', second_bidder='$s', third_bidder='$t' WHERE Sr_No ='$srno'";
$result2 = mysql_query($query2);
if($result2)
{?>
    <h1 align="center" style="color: #000;"><?php echo $_COOKIE["user"]; ?>&nbsp; Bid of <?php echo($hb) ?> Successfully Placed</h1>
<?php }
else
{ ?>
    <h1 align="center" style="color: #000;"><?php echo $_COOKIE["user"]; ?>&nbsp;Error </h1>
<?php   
}
}
?> 
<hr  width="80%"/>
<br /> 
<h2><a href="Active market bidder.php">Back</a></h2>
</body>
<?php
//header("Location:Market List bidder.php?sessionid=$_SESSION[username]");

mysql_close($link);
}

if (isset($_POST['nxtbid']))
{
   include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
//echo "Look for the user in the users table.";
$query = "SELECT Sr_No, highest_bid, Base_price, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder, min_increment FROM itemsactive";
$result = mysql_query($query);
// Has the user been located?
$row = mysql_fetch_array($result);

$base=$row['Base_price'];
$bid=$_POST['cbid'];
$srno=$row['Sr_No'];
$hb=$row['highest_bid'];
$shb=$row['second_highest_bid'];
$thb=$row['third_highest_bid'];
$h=$row['highest_bidder'];
$s=$row['second_bidder'];
$t=$row['third_bidder'];
$min=$row['min_increment'];

$thb=$shb;
$shb=$hb;
if ($hb > $base)
{
    $hb=($hb+$min);  
}
else
{
    $hb=($base+$min);  
}
$t=$s;
$s=$h;
$high=$_COOKIE["user"];

echo " current bid " .$hb. " bidder ".$h;
echo "   " .$srno. "   ".$bid;
echo "   " .$shb. "   ".$thb;
echo "   " .$s. "   ".$t;

$query2 = "UPDATE itemsactive SET highest_bid='$hb', second_highest_bid='$shb', third_highest_bid='$thb', highest_bidder='$high', second_bidder='$s', third_bidder='$t' WHERE Sr_No ='$srno'";
$result2 = mysql_query($query2);
if($result2)
{?>
    <h1 align="center" style="color: #000;"><?php echo $_COOKIE["user"]; ?>&nbsp; Bid of <?php echo($hb) ?> Successfully Placed</h1>
<?php }
else
{ ?>
    <h1 align="center" style="color: #000;"><?php echo $_COOKIE["user"]; ?>&nbsp;Error </h1>
<?php   
}
}
?> 
<hr  width="80%"/>
<br /> 
<h2><a href="Active market bidder.php">Back</a></h2>
</body>
<?php }

else { header('location:index.php');
  }?>