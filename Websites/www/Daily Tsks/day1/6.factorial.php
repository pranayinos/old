<?php
if(isset($_GET['sub']))
{
    $num=$_GET['num'];
   $fact=1;
   for($i=1;$i<=$num;$i++)
   {
        $fact*=$i;
   }
   echo "Factorial of $num is $fact";
}
else

{
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
    enter a no  :<input  type="text" name="num"/>
    <input   type="submit" name="sub" value="Get Factorial"/> 
    </form>
    <?php
}

?>