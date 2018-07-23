<?php
if(isset($_GET['sub']))
{
    $day=$_GET['day'];
    switch($day)
    {
        case 0:echo "Sunday";
                    break;
        case 1:echo "Monday";
                    break;
        case 2:echo "Tuesday";
                    break;
        case 3:echo "Wednesday";
                    break;
        case 4:echo "Thursday";
                    break;
        case 5:echo "Friday";
                    break;
        case 6:echo "Saturday";
                    break;
        default:echo "Invalid Marks";
                break;
                
    }
}
else

{
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
    Enter Day NO:
    <select name="day">
    <?php
    for($i=0;$i<7;$i++)
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