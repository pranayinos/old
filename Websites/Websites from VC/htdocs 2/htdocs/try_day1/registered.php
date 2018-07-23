<?php session_start(); 

?>
<head>
<title>Registered</title>
</head>

<body>

<?php if(isset($_SESSION['id']))
{
?>

<br />
<br />
<br />
<br />
<p style="font-size:36px; font-family:'Comic Sans MS', cursive" align="center">
User id  <?php echo "$_SESSION[id]";?> Registered successfully </p> <hr width="5"/>
<a href="index.php">go to login page</a>
</body>
</html>
<?php 
session_destroy();

}
else
{
?>
<script> location='index.php'</script>
<?php }?>