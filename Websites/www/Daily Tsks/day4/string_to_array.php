<?php


 function str($astr)
 {
    $a=array($astr);
    return ($a);
 }
if(isset($_POST['sub']))
{
    $pstr=$_POST['t1'];
 $aarr=str_split($pstr);
 print_r($aarr);

}
else
{
   
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Enter String<br /><input type="text" name="t1" align="center"/>
<br />

<br />
<br />
<center><input type="submit" name="sub" value="Enter"/></center>
</form>
<?php
}

?>
