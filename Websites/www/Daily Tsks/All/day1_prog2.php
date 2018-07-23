<?php
/**
 * @author pranay soni
 * @copyright 2011
 */
//Checks a letter if it is a vowel or consonant
// INPUT a file using form tag
if (isset ($_POST['sub']))
{
    
echo "<font face='arial', color='Blue'> <hr size ='3', color='red'>"; 
$vow = $_POST['txt'];
if($vow=='a'||'e'||'i'||'o'||'u')
{
echo "<h1><center>Vowel</center></h1>";
}
else
{
echo "<h1><center>Consonant</center></h1>";
}
    
echo "<hr size ='3', color='red'> </font>";    
     
}
else{
    ?>
    <html>
<head>
<title> Vowel Program </title>
</head>
<body>
<center><h1> Check if a number is vowel or not</h1></center>
<hr size="2" color="red">

<form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" align="center">
<tr> <td>enter the letter</td><td><input  type="Text" name="txt"/></td></tr>
</table>
<center><input  type="submit" name="sub" value=".. Check .."/></center>
</form>





</body>
</html>
<?php
}
?>





