<?php
$link = mysql_connect("localhost","root","") ;
if(!$link)
{
    echo "Mysql not connected";
}
if(!mysql_select_db("win2012"))
{
    echo "Database not connected";
}
$qr = "create table login(user_name varchar(30),user_pass varchar(30))";
$result = mysql_query($qr,$link);
if($result)
{
    echo "Create Table";
}
else
{
    echo "Table Not Created";
}
mysql_close($link);

?>