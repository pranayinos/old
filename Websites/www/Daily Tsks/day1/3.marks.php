<?php
if(isset($_GET['sub']))
{
    
    $marks= (int)($_GET['marks']/10);
   switch($marks)
    {
        case 0:echo "Fail,,!!!!";
                    break;
        case 1:echo "Fail,,!!!!";
                    break;
        case 2:echo "Fail,,!!!!";
                    break;
        case 3:echo "Fail,,!!!!";
                    break;
        case 4:echo "Just Pass...!!!";
                    break;
        case 5:echo "2nd div";
                    break;
        case 6:echo "1st div";
                    break;
        case 7||8||9:echo "Distintion.. :)";
                    break;
        default:echo "Invalid Marks";
                
    }
    
}
else

{
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
    Select Marks :
    <select name="marks">
    <?php
    for($i=1;$i<=100;$i++)
    {
      echo "<option>$i</option>";
    }
    ?>
    </select>
    <input   type="submit" name="sub"/> 
    </form>
    <?php
}

?>