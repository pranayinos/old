<?php
/**
 * @author pranay soni
 * @copyright 2011
 */
if(isset($_GET['sub']))
{
$link=mysql_connect('localhost','root','');

if($link){ 
    
    $db=mysql_select_db('mydb',$link);
    $qr="select name from stu";
    $names=mysql_query($qr,$link);
        
        $name2 = $_GET['name2'];
        $name = trim($first)." ".trim($middle)." ".trim($last);
        $add = $_GET['add'];
        $phno = $_GET['phno'];
        $deg = $_GET['deg'];
        $ten = $_GET['ten'];
        $twelve = $_GET['twelve'];
        $CG = $_GET['CG'];
    
        $qr= "update stu set name='$name2',add1='$_GET[add]',phno='$_GET[phno]',deg='$_GET[deg]',ten='$_GET[ten]',twelve='$_GET[twelve]',CG='$_GET[CG]' where name='$name2'";
             echo $qr;
        
        if(mysql_query($qr,$link))  {
                                        echo "<br>success";
        
                                    }
}
else
{
  echo  "Connection not established";
}
 mysql_close($link);
}

else
{
    ?>
<?php
$link=mysql_connect('localhost','root','');
$db=mysql_select_db('mydb',$link);
$qr="select name from stu";
$names=mysql_query($qr,$link);
?>
<form method="GET" action="<?php $_SERVER['php_self'];?>">


<h2>Personal Details</h2>
Name &nbsp &nbsp &nbsp
<select name='name2' >
<option>Select name</option>
<?php
while ($names1=mysql_fetch_row($names))
{
echo "<option value='$names1[0]'> $names1[0] </option>";
}
echo "</select>";
?>
<!--<input type ='text' name='name'/></br></input>-->
</br>Address &nbsp &nbsp &nbsp
<?php
$qr2="select add1 from stu where name=";
$names2=mysql_query($qr2,$link);

echo "<input type ='text' name='add'/><br>";
?>
Phone No. &nbsp
<input type ='text' name='phno'/><br>
<hr size="3" color="Black">
<h2>Academic Details</h2>
&nbsp &nbsp &nbsp &nbsp <br>
Qualification &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type ='text' name='deg'/><br>
10th Marks&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
<input type ='text' name='ten'/><br>
12th Marks&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
<input type ='text' name='twelve'/><br>
CGPA &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp
<input type ='text' name='CG'/><br>
<br><Center><input type ="submit" value='Update' name="sub"/></Center>
</form>
<?php
 mysql_close($link);	}
?>