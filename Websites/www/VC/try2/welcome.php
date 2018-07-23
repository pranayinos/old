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
$image=$row[11];
//echo $image;
//echo $st . " ". $name;
?>
<div><p  align="center" id="heading"><?php echo $st . " ". $name; ?>'s Profile</div>
<img src="upload/<?php echo $image;?>" >
<br><br>
<a href="edit.php">Edit/update</a> 
  
</body>

</html><hr>

<?php 
}
else
{
?>
<script> location='index.php'</script>
<?php }?>