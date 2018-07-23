<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

//This program counts the nomber of accurances of a particular word in file
// INPUT a file and a word using form tag
if (isset ($_POST['sub']))
{
    
   /* echo $_FILES['file']['name']."<br>";
    echo $_FILES['file']['tmp_name']."<br>";
    echo $_FILES['file']['type']."<br>";*/
    $add= './uploaded/'.$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$add))
    {
        
            
        $s_word=$_POST['txt'];
        $file=file_get_contents($add);
        str_replace($s_word,$s_word,$file,$count);
        echo "<hr><center><h2><br> <br> Number of $s_word is $count <h2> </center><hr>";
    }
    
    
     
}
else{
    ?>
    <html>
<head>
<title> Count the word and Characters </title>
<link  rel="icon" type="image/png" href = "./dice.png"/>
</head>
<body>
<center><h1>Frequency of a word in a file</h1></center>
<hr size="3">

<form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" align="center">
<tr> <td> Search Word </td>  <td><input  type="text" name="txt"/></td></tr>
<tr> <td>File Input</td><td><input  type="file" name="file"/></td></tr>
</table>
<center><input  type="submit" name="sub" value="Count"/></center>
</form>





</body>
</html>
<?php
}
?>




