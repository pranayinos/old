<body background="j2.jpg" style="color: silver;"></body>
<hr  width="80%" size="3" style="color: olive;"/>
<h1 style="color: silver;"><center>Insert intos  Login Database </center></h1>
<hr  width="80%" size="3" style="color: olive;"/>
<?php
if(isset($_GET['sub']))
{
    $link=mysql_connect("localhost","root","");
    echo "<br>"."<br>"."link value is : ".$link."<br>";
    if(!$link)
    {
        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        echo "<br>"."<br>"."Connected to My Sql....."."<br>";       
    
        if(!mysql_select_db("ankit"))
        {
            echo "Cannot conect to database....";
        }
        else
        {
            echo "<br>"."Conected to database....";
            $qr="insert into login values('$_GET[uname]','$_GET[upass]')";
            $execute=mysql_query($qr,$link);
            if($execute)
            {
                ?>
                <hr />
                <?Php
                echo "<br>"."Values succesfully <b>Inserted</b>";
                ?>
                <hr />
                <br />
                <br />
                <hr  width="40%" style="color: silver;"/>
                <?php
            }
            else
            {
                echo "<br>"."opps...!!!"."<br>"."Values not inserted";
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
<table border="2" width="50%" style="color: silver;">
<tr ><td colspan="2" align="center">Insert  Login Details    </td></tr>
<tr>
<td align="left">User name</td>
<td align="center"><input  type="text" align="center" name="uname" /></td>
</tr>
<tr>
<td align="left">Password</td>
<td align="center"><input  type="password" align="center" name="upass"/></td>
</tr>
<tr>
<td align="left"><input  type="reset"/></td>
<td align="center"><input  type="submit" align="center" name="sub" value="Insert.!!" style="background-color:gray;" /></td>
</tr>
</table>
</form>
<?php
}

?>