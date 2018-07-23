<?php

if(isset($_POST['sub']))
{
    ?>
    <body  background="s10.jpg"></body>
    <?php
    echo $_POST['dd'];
    switch($_POST['dd'])
    {
        case 1: $size=filesize($_POST['file_n']);
                echo "<b>Length of File is : </b>".$size."<b>bytes</b>";
                break;
        case 2: unlink($_POST['file_n']);
                echo "File Deleted";
                break;
        case 3: $fname=$_POST['file_n'];
                $fnewname=$_POST['new'];
                rename($fname,$fnewname);
                echo "File renamed Sucessfully... :)";
                break;
        case 4: $fname=$_FILES['file_n']['tmp_name'];
                echo $fname;
                $fnewname=$_POST['new'];
                if(move_uploaded_file($fname,$fnewname))
                {echo "File uploaded to new location sucessfully.. :)";}
                break;
        default: echo "error";
                    break;
    }
        

}
else
{
   
?>
<head>
</head>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<body  background="s9.jpg"></body>
<center><h1 style="color: red;">File Operations</h1></center>
<br />
<hr  size="3"  color="green" width="80%" align="center"/>
<br />
<br />
File Name
<br />
<input type="file" name="file_n"/>
<br />
<br />
<select size="1" name="dd">
    <option  value="0" style="background-color:  silver;">Select</option>
	<option  value="1">Size</option>
	<option value="2">Delete</option>
    <option value="3">Rename</option>
	<option value="4">Copy to location</option>
</select>
<br />
<br />Enter new name/location:
<br />
<input name="new" type="text"/>
<br />
<input type="submit"  style="background-color: gray;" name="sub" value="  Enter,,,"/>
</form>
<?php
}

?>