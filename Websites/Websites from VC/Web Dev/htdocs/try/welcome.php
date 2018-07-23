<?php session_start(); 
$id=$_SESSION['id'];
?>
<head>
<title>welcome-<?php echo("$id");?></title>
<link href="mysh2.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php if(isset($_SESSION['id']))
{
require "db.php";
$qry="select * from data where id='$id'";
$result=mysql_query($qry,$res);
$row=mysql_fetch_row($result);
$st=$row[0];
$name=$row[1];
$name2=$row[2];
$name3=$row[3];
$add=$row[4];
$city=$row[5];
$state=$row[6];
$phone=$row[7];
$email=$row[8];
$image=$row[11];

//echo $image;
//echo $st . " ". $name;
?>
<div id="head" align="center">
<p  align="center" id="heading">
<?php echo $st . " ". $name; ?>'s Profile</p>
<div align="center" id="logout"> <a href="logout.php"> Logout </a> 
</div><div align="center" id="logout"> <a href="list.php">  List  </a> 
</div>
</div><br>
<div style="float:left; height:110px; width:40%"><img  align="right" src="upload/<?php echo $image;?>" ></div>
<div style="float:right;height:110px;background: #A9AAD6 ; width:59%"">
<B>
<?php echo $st." ".$name." ".$name2." ".$name3 ?>
<br></B>
<?php echo $add.", ".$city." "?>
<br>
<?php echo $state.", India "?>
<br>
<?php echo "Phone No. ".$phone?>
<br>
<?php echo "Email id : ".$email?>
</div>
<div style="width:100%; margin-top:200px">
<br>
<hr>
<P align="center">
<a href="edit.php">Edit/update</a> 
</P>

</div>  
</body>

</html>

<?php 
}
else
{
?>
<script> location='index.php'</script>
<?php }?>