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
    
        $name = $_GET['name'];
        $qr= "delete from stu where name='$name'";
                     echo $qr;
        
        if(mysql_query($qr,$link)){
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
<h2><center>Delete Record</center></h2>
Name &nbsp
<select name='name' >
<option >Select name</option> 
<?php
while ($names1=mysql_fetch_row($names))
{
echo "<option > $names1[0] </option>";
}
echo "</select>";
?>
<br><Center><input type ="submit" value='Delete' name="sub"/></Center>
</form>
<?php
	}
?>