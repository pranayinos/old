<?php session_start(); 

?>
<head>

<title>Untitled Document</title>
</head>

<body>

<?php if(isset($_SESSION['id']))
{
	?>

</body><br /><br /><br /><br />
<p style="font-size:36px; font-family:'Comic Sans MS', cursive" align="center"> WELCOME <?php echo "$_SESSION[id]";?></p><hr width="5"/>

<form action="fileupload.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form



</body>
</html>
<?php 
}
else
{
?>
<script> location='index.php'</script>
<?php }?>