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
if (isset($_POST['stop']))
{

include_once "db.php"; 
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
$user=$_COOKIE["user"];

//echo "Look for the user in the users table.";
//------------------------------------------------------------------------------------------------------------------------------------------------

 
 //$query0 = "SELECT Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder FROM itemsactive";
$query0 = "SELECT Sr_No from itemsactive";
$result = mysql_query($query0);
if($result)
{?>
    &nbsp;   <br>Successfully read from itemsactive
<?php }
else
{ ?>
    Error cannot read from itemsactive <br />
<?php   
}
$row = mysql_fetch_array($result);

$srno=$row['Sr_No'];
/** $name=$row['Product_Name'];
$desc=$row['description'];
$stock=$row['stock'];
$base=$row['Base_price'];
$min=$row['min_increment'];
$hb=$row['highest_bid'];
$shb=$row['second_highest_bid'];
$thb=$row['third_highest_bid'];
$h=$row['highest_bidder'];
$s=$row['second_bidder'];
$t=$row['third_bidder'];
*/echo "$srno";
//------------------------------------------------------------------------------------------------------------------------------------------------
$query2 = "INSERT INTO itemsclosed (Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder)  SELECT Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder FROM itemsactive ";
$result2 = mysql_query($query2);
if($result2)
{?>
    &nbsp;   <br>Successfully inserted into items closed
<?php }
else
{ ?>
    Error  in insertin into items closed <br />
<?php   
}
//-----------------------------------------------------------------------------------------------------------------------------------------------

$query1 = "DELETE FROM itemsactive WHERE Sr_No='$srno'";
$result1 = mysql_query($query1);
if($result1)
{?>
    &nbsp;   <br>Successfully Deleted from itemsactive
<?php }
else
{ ?>
    Error in Deleting from itemsactive<br />
<?php   
}
/** ---------------------------------------------------------------------------------------
$query5 = "SELECT Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder FROM items";
$result5 = mysql_query($query5);

$row = mysql_fetch_array($result5);

$srno=$row['Sr_No'];
$name=$row['Product_Name'];
$desc=$row['description'];
$stock=$row['stock'];
$base=$row['Base_price'];
$min=$row['min_increment'];
$hb=$row['highest_bid'];
$shb=$row['second_highest_bid'];
$thb=$row['third_highest_bid'];
$h=$row['highest_bidder'];
$s=$row['second_bidder'];
$t=$row['third_bidder'];
if($result5)
{?>
    &nbsp;   <br>Successfully read from items
<?php }
else
{ ?>
    Error cannot read from items <br />
<?php   
}*/
//------------------------------------------------------------------------------------------------------------------------------------------------
$srno2=($srno+1);
$query4 = "INSERT INTO itemsactive (Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder) SELECT Sr_No, Product_Name, description, stock, Base_price, min_increment, highest_bid, second_highest_bid, third_highest_bid, highest_bidder, second_bidder, third_bidder FROM items WHERE Sr_No='$srno2' ";
$result4 = mysql_query($query4);
if($result4)
{?>
    &nbsp;   <br>Successfully inserted
<?php }
else
{ ?>
    Error in inserting<br />
<?php   
}
//------------------------------------------------------------------------------------------------------------------------------------------------
$srno2=($srno+1);
$query3 = "DELETE FROM items WHERE Sr_No='$srno2'";
$result3 = mysql_query($query3);
if($result3)
{?>
    &nbsp;   <br>Successfully Deleted
<?php }
else
{ ?>
    Error <br />
<?php   
}


}
?> 
<hr  width="80%"/>
<br /> 
</body>
<?php
header("Location:Active market observer.php");
mysql_close($link);
}
else { header('location:index.php');
  }?>