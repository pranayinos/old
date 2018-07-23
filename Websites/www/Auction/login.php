 <?php

//if($name=="ram"&&$pass=="123")
//{
//	header("Location: Market List.php");
//	session_start();
	// store session data
//	$_SESSION['u_name']=$name;
//}

//?>
<?php
include_once "db.php"; 
session_start();
$name=$_POST['u_n'];
$pass=$_POST['pass'];

$a=0;
// Connect to the MySQL server and select the database
$link=mysql_connect("$SERVER","$USER","$PASSWORD");
mysql_select_db("$DATABASE");
//echo "Look for the user in the users table.";
$query = "SELECT * FROM login WHERE u_n='$name' AND pass='$pass'";
$result = mysql_query($query);
// Has the user been located?
if (mysql_numrows($result) == 1)
{
//$_SESSION['username'] = mysql_result($result,0,'u_n');
$user_type=mysql_result($result,0,'user_type');
setcookie("user", "$name", time()+3600);
setcookie("user_type", "$user_type", time()+3600);
if($user_type=='bidder'){
header('Location:Market List bidder.php');
}else if($user_type=='observer'){
header('Location:Market List observer.php');
}else if($user_type=='admin'){
header('Location:Create User.php');
}else if($user_type=='superadmin'){
header('Location:superadmin.php');
}


//header("Location:Market List bidder.php?sessionid=$_SESSION[username]");
}







else
{	$_SESSION['a']=$_SESSION['a']+1;
	header("Location:try again.php?attempt=$_SESSION[a]");
}