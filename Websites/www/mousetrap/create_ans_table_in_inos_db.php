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
    if(!mysql_select_db("inos"))
    {
        echo "Cannot conect to database....";
    }
    else
    {
        echo "Conected to database....";
        $qr="create table ans(roll varchar(25),name varchar(25),a1 varchar(25),a2 varchar(25),a3 varchar(25),a4 varchar(25),
        a5 varchar(25),a6 varchar(25),a7 varchar(25),a8 varchar(25),a9 varchar(25),a10 varchar(25),
        a11 varchar(25),a12 varchar(25),a13 varchar(25),a14 varchar(25),a15 varchar(25))";
        $result=mysql_query($qr,$link);
        if($result)
        {
           echo "<br>"."Table Created,,,,"; 
        }
        else
        {
            echo "Caanot create table...!!!";
        }
    }
    mysql_close($link);
?>