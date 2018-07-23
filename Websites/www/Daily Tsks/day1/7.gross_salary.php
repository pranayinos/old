<?php
if(isset($_GET['sub']))
{   
    
    $sal=$_GET['sal'];
    if($sal>0&&$sal<=2000)
    {
        $gross=$sal+(.1*$sal)+(.2*$sal);
    }
    elseif($sal>2000&&$sal<=5000)
    {
        $gross=$sal+(.2*$sal)+(.3*$sal);
    }
    elseif($sal>5000&&$sal<=10000)
    {
        $gross=$sal+(.3*$sal)+(.4*$sal);
    }
    elseif($sal>10000)
    {
        $gross=$sal+(.5*$sal)+(.5*$sal);
    }
    else
    {
        $gross=0;
    }
    echo "Gross Salary is $gross";
    

}
else

{
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
    Enter Salary:<input  type="text" name="sal"/>
    <input   type="submit" name="sub" value="Gross Salary"/> 
    </form>
    <?php
}

?>