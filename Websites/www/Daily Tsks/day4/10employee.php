<?php


 $emp=array("ram"=>12000,"raj"=>15000,"ankit"=>80000,"shankar"=>70000,"amit"=>45000,"ravi"=>50000,"maanik"=>80000,"anurag"=>110000,"abhinov"=>65000,"abhishek"=>55000);
 
if(isset($_POST['sub']))
{
    
    if(array_key_exists($_POST['t1'],$emp))
    {
        
        $a=$_POST['t1'];
        echo "Salary of $a is  ";
     echo $emp[$a];
    }
    else
    {
         echo "!!!!...name not found"."<br><br>"."Following Employeees are in list:"."<br><br>";
           $name=array_keys($emp);
           for($i=0;$i<=10;$i++)
           {
            
           
        echo $name[$i]."<br>";
        }
    
      
    
    }
}
else
{
   
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Enter Employee Name to get salary:                            <input type="text" name="t1"/>
<br />
<center><input type="submit"  value="submit" name="sub" /></center>
<?php
}
?>


</form>