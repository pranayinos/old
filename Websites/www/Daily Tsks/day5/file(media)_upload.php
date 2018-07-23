<?php
if(isset($_POST['sub']))
{
    $add="day5/".$_FILES['upload']['name'];
    if(move_uploaded_file($_FILES['upload']['name'],$add))
    {
        
    }
}
else
{
?>
<form  style="background-color: gray;"action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >

<hr />
<h1 style="background-color: green; ">Upload Media Files</h1>
<hr />
<br /><br />
<center>
Choose file to be uploaded
<br />
<input  type="file" name="upload"/>
<br />
<br />
<input  type="submit" name="sub" value="UPLOAD"/>
</center>
</form>
<?php
}

?>