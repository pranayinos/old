<!--  This program copies a file to a given location
//INPUT a file using form tag address to copy and the file name-->
<html>
<head>
<style type="text/css">
h3{
    color: rgb(200,215,25);
    
}
#id1{
    color: red;
    cursor: progress;
    text-decoration: overline;
    background: black;
    
}
</style>
<title> Copy File </title>
</head>
<body background="pic.jpg" >
<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

if (isset ($_POST['sub']))
{      
       $temp=$_FILES['file']['tmp_name'];  
        echo "$temp" ;
        $name=$_POST['nam'];
        $add=$_POST['copy'];
        $path=$add.$name;
        echo $path;
        (move_uploaded_file($_FILES['file']['tmp_name'],$path)) ;
        
        
                                      
         }         
else
{
    ?>    
    

<center><h1 id="id1"> Input File</h1></center>
<hr size="3"/>

<form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" align="center">
<tr> <td>File Input</td><td><input  type="file" name="file"/></td></tr>
<tr> <td>Copy Location</td><td><input  type="text" name="copy"/></td></tr>
<tr> <td>File Name</td><td><input  type="text" name="nam"/></td></tr>
</table>
<center><input  type="submit" name="sub"  value="Copy"/></center>

</form>

<?php
}
?>
</body>
</html>