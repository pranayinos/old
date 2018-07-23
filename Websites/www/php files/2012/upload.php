<?php
if(isset($_POST['submit']))
{
    $target_path = "upload/";

$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) 
{
    echo "The file ".basename( $_FILES['uploadedfile']['name'])." has been uploaded";
    echo "<a href='ex.php'>Download This File</a>";
    
} else{
    echo "There was an error uploading the file, please try again!";
}

}
else
{
?>
<form  enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Choose a file to upload:
 <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" name="submit" />
</form>
<?php
}
?>