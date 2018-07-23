<?php

/**
 * @author 
 * @copyright 2011
 */
function add($f,$s)
 {
    $ad=$f+$s;
    echo $ad;
 }
  function sub($f,$s)
 {
    $ad=$f-$s;
    echo $ad;
 }
  function mul($f,$s)
 {
    $ad=$f*$s;
    echo $ad;
 }
  function div($f,$s)
 {
    $ad=(int)$f/$s;
    echo $ad;
 } 
if(isset($_POST['sub']))
{
    
    $f=$_POST['t1'];
    $s=$_POST['t2'];
    $o=$_POST['op'];
    
    echo "<br>";
   switch($o)
   {
    case 1:add($f,$s);
            break;
    case 2:sub($f,$s);
            break;
    case 3:mul($f,$s);
            break;
    case 4:div($f,$s);
            break;
    default:echo"INVALID CHIICE.....!!!!!!";
            break;
            
   }
}
else
{
   
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Enter First Value<br /><input type="text" name="t1" align="right"/>
<br />
Enter Second Value<br /><input type="text" align="right" name="t2"/>
<br />
Enter Operation no.(1 for addition||2for subtraction||3 for multiplication||4 for division)<br />
<input  type="text" name="op"/>
<br />
<br />
<center><input type="submit" name="sub" value="Enter"/></center>
</form>
<?php
}

?>





