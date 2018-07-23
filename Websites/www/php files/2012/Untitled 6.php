<?php
$user="root";
    $pass="";
$con = new PDO('mysql:host=localhost;dbname=win2012',$user,$pass);
$count = $con->exec("delete from login where user_name='anoop'");
echo "deleted!!!";
?>