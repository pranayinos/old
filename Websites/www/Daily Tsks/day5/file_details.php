<body background="s4.jpg"></body>
<?php
if(isset($_POST['sub']))
{
    echo "File Name : ".$_FILES["ufile"]["name"]."<br>";
    echo "File Type : ".$_FILES['ufile']['type']."<br>";
    echo "File tmp name : ".$_FILES['ufile']['tmp_name']."<br>";
    echo "File Error No. : ".$_FILES['ufile']['error']."<br>";
    echo "File Size : ".$_FILES['ufile']['size']."<br>";    
}
else
{
    ?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">
<hr  style="color: red;"/>
<center><h1  style="text-decoration:underline; color:white; background-color:green;">File Deatils</h1></center>
<hr style="color: red;"/>
<br />
<br />
<br />
<center>
<input  type="file" name="ufile" style="background-color: transparent; color:white;text-align:center;"/></center>
<br />
<br />
<center><input  type="submit" name="sub" value="Show Details" style="background-color: transparent;color: white;;"/></center>
</form>
<?php
}
?>