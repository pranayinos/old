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
        $qr="create table sign_up(first_name char (25),middle_name char (25),
        last_name char (25),contact_no varchar (11),address varchar (100),
        pecentage_10 int,pecentage_12 int,graduation int,
        job_field varchar (20),experiance varchar (15),user_name char (25),
        password varchar (30),confirm_password varchar (25))";
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