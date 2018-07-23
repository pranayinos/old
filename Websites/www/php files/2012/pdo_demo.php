<?php
try
{
    $user="root";
    $pass="";
$con = new PDO('mysql:host=localhost;dbname=win2012', $user, $pass,array(PDO::ATTR_PERSISTENT=>true));
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 if(!$con)
 {
    echo "localhost not Connected!!!!!!!!!!";
 }   
 foreach($con->query('select* from emp') as $row)
 {
    print_r($row);
 }
}catch(PDOException $e);
?>


