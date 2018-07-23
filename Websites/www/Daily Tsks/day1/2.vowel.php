<?php
if(isset($_GET['sub']))
{
    $char=$_GET['char'];
    if($char=='a'||$char=='e'||$char=='o'||$char=='i'||$char=='u')
    {
        echo "you have entered a vowel...";
    }
    else
    {
        echo "you have entered a consonant...";
    }
}
else

{
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
    enter a character  :<input  type="text" name="char"/>
    <input   type="submit" name="sub"/> 
    </form>
    <?php
}

?>