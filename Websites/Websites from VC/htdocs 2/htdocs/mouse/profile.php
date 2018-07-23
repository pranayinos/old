<body bgcolor="#8080FF"></body>
<?php
$name=$_GET['user_name'];
echo "<h3>welcome to your profile  $name... :-)</h3><hr/>";


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
            $qr="select job_field from sign_up where user_name='$_POST[user_name]'";
            $execute=mysql_query($qr,$link);
            if($execute)
            {
               
                echo $execute;;
               
            }
            else
            {
                echo "<br>"."opps...!!!"."<br>"."Values not inserted";
            }
        }
    }
    mysql_close($link);
?>