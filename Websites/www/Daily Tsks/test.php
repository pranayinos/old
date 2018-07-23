<?php
if(isset($_POST['sub']))
{
    echo $_FILES['myfile']['name'];
    
}
else
{
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<input type="file" name="myfile" />
<input type="submit" name="sub" />
</form>
<?php
}
?>
