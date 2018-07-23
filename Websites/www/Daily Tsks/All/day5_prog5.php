<!--  This program copies a file to a given location
//INPUT a file using form tag address to copy and the file name-->
<html>
<head>
<link  rel="icon" type="image/png" href = "./dice.png"/>
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
     $res=strcmp($sel,'File rename');
     $temp=$_FILES['file']['tmp_name'];  
        $sel=$_POST['selection'];
       echo "$res" ;
        $name=$_POST['nam'];
        $add=$_POST['copy'];
        $path=$add."\\". $name;
        //echo $path;
        (move_uploaded_file($_FILES['file']['tmp_name'],$path)) ;
        {
           echo "<h1> <centre> Success </h1><hr></centre>";
           echo "<h2> File $sel successful</h2>";
        
        }
                                      
         }         
else
{
    ?>    
    

<center><h1 id="id1"> Input File</h1></center>
<hr size="3"/>

<form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" align="center">
<tr> <td>File Input</td><td><input  type="file" name="file"/></td></tr>
<tr> <td>Select Operation Type</td><td>
<select name="selection"> 
<option style="background: aqua;">Delete</option>
<option style="background: fuchsia;">File rename</option>
<option style="background: green;">Copy to location</option>
</select> </td></tr>
<tr> <td>Copy Location or New Name</td><td><input  type="text" name="name"/></td></tr>

</table>
<center><input  type="submit" name="sub"  value="Ok"  accesskey="return" style="width: 75px;"/></center>

</form>

<?php
}
?>
</body>
</html>