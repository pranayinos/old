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
        $qr="create table login(user_name char (25),password varchar (30))";
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