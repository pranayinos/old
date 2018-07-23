<?php
if(isset($_POST['sub']))
{    
 echo $_POST['t1'];
   
}
else
{
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="t1" />
<input type="submit" name="sub" />

<?php
}
?>

</form>