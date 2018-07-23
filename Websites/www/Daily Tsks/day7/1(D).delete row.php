<body background="j2.jpg" style="color: white;"></body>
<hr  width="80%" size="3" style="color: olive;"/>
<h1 style="color: silver;"><center>Delete from  Login Database </center></h1>
<hr  width="80%" size="3" style="color: olive;"/>
<a href="show_login_table.php" style="color:  gray;"><h3>Show Login Table</h3></a>
<?php
if(isset($_GET['sub']))
{
    $link=mysql_connect("localhost","root","");
    echo "<br>"."link value is : ".$link."<br>";
    if(!$link)
    {

        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";

    }
    else
    {
        echo "Connected to My Sql....."."<br>";       
    
        if(!mysql_select_db("ankit"))
        {
            echo "Cannot conect to database....";
        }
        else
        {
            echo "Conected to database....";
            $qr="delete from login where user_name='$_GET[uname]'";
            $execute=mysql_query($qr,$link);
            if($execute)
            {
                ?>
                <hr />
                <?php
                echo "<br>"."<h3>Values deleted sucessfully..!!!!</h3>";
                ?>
                <hr />
                <br />
                <br />
                <br />
                <hr  width="40%" style="color: silver;"/>
                <?php
            }
            else
            {
                echo "<br>"."opps...!!!"."<br>"."<b></u>Values not deleted</b></u>";
            }
        }
    }
    mysql_close($link);
}
else
{
?>
<form method="get" action="<?php $_SERVER['PHP_SELF'];  ?>">
<br />
<br />
<h3 style="color: red;"></h3>
<table border="2" width="50%" style="color: silver;">
<tr ><td colspan="2" align="center">Delete From Login Table   </td></tr>
<tr>
<td align="left">User name</td>
<td align="center"><input  type="text" align="center" name="uname" /></td>
</tr>
<tr>
<td align="left"><input  type="reset"/></td>
<td align="center"><input  type="submit" align="center" name="sub" value="Delete.!!" style="background-color: transparent; color: white;" /></td>
</tr>
</table>
</form>
<?php
}

?>