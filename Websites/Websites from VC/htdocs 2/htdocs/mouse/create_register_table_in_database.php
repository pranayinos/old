<?php

    $link=mysql_connect("localhost","root","");
    echo "link value is : ".$link."<br>";
    if(!$link)
    {
        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        echo "Connected to My Sql....."."<br>";       
    }
    if(!mysql_select_db("ankit"))
    {
        echo "Cannot conect to database....";
    }
    else
    {
        echo "Conected to database....";
        $qr="create table register(roll_no varchar (20),name char (40),task_1 varchar(20),
                                    task_2 varchar(20),task_3 varchar(20),task_4 varchar(20),
                                    task_5 varchar(20),task_6 varchar(20),task_7 varchar(20),
                                    task_8 varchar(20),task_9 varchar(20),task_10 varchar(20),marks int)";
        $result=mysql_query($qr,$link);
        if($result)
        {
           echo "<br>"."<b><h2> Register Table created Successfully,,,,</h2></b>"; 
        }
        else
        {
            echo "Caanot create table...!!!"."<br>"."contact Administrators(Ankit / Pranay)....";
        }
    }
    mysql_close($link);
?>
<a href=".\home.php"><b ><h3>Go TO HomePage.... :-)</h3></b></a>