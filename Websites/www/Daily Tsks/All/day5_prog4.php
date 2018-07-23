<!--
//
This program displays the content of a file in a text area
// INPUT a file using form tag-->
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
<title> Display </title>
</head>
<body>
<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

if (isset ($_POST['sub']))
{      
          $add= './uploaded/'.$_FILES['file']['name'];
        if($file=file_get_contents($add))
           {       
                 echo "<textarea rows='40' cols='160' >$file </textarea>";
            }
            else
            {
                echo("<H3> the file Does not Exists</h3>");
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
</table>
<center><input  type="submit" name="sub"  value="Display"/></center>

</form>

<?php
}
?>
</body>
</html>