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
        $add = $_GET['add'];
        $phno = $_GET['phno'];
        $deg = $_GET['deg'];
        $ten = $_GET['ten'];
        $twelve = $_GET['twelve'];
        $CG = $_GET['CG'];
        $qr="insert into stu values('$name','$add','$phno','$deg','$ten','$twelve','$CG')";
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

<form method="GET" action="<?php $_SERVER['php_self'];?>">
<h2>Personal Details</h2>
Name &nbsp 
<input type ='text' name='name'/></br></input>
Address &nbsp &nbsp &nbsp
<input type ='text' name='add'/><br>
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
<br><Center><input type ="submit" value='Save' name="sub"/></Center>
</form>
<?php
	}
?>