<?php
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
            $uname=$_POST['user_name'];
            $upass=$_POST['password'];
            $job=$_POST['job_field'];
            $qr="insert into sign_up values ('$uname','$upass','$job')";
            echo $qr;
            $execute=mysql_query($qr,$link);
            if($execute)
            {
               
                echo "<br>"."Values succesfully <b>Inserted</b>";
               
            }
            else
            {
                echo "<br>"."opps...!!!"."<br>"."Values not inserted";
            }
        }
    }
    mysql_close($link);


?>