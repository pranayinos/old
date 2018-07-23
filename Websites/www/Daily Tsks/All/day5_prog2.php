<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

//This program counts the number of words and characters in a file
// INPUT a file using form tag
if (isset ($_POST['sub']))
{
    
   /* echo $_FILES['file']['name']."<br>";
    echo $_FILES['file']['tmp_name']."<br>";
    echo $_FILES['file']['type']."<br>";*/
    $add= './uploaded/'.$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$add))
    {
        
            
         $file=file_get_contents($add);
         $s_length=strlen($file);
        echo "<hr><center><h2>Number of Characters is $s_length <h2> </center><hr><br>";
        $s_array=explode(" ",$file);    
        $count=count($s_array);    
    
    
     echo "<hr><center><h2> Total number of words is $count <h2> </center><hr><br>";
    
    }
    
    
     
}
else{
    ?>
    <html>
<head>
<title> Frequency of the word </title>
</head>
<body>
<center><h1> Total number of a words and characters in a file</h1></center>
<hr size="3">

<form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" align="center">
<tr> <td>File Input</td><td><input  type="file" name="file"/></td></tr>
</table>
<center><input  type="submit" name="sub" value="Count"/></center>
</form>





</body>
</html>
<?php
}
?>





