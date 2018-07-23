<?php
$name=$_GET['user_name'];
$pass=$_GET['pass'];
if($name=="ram"&&$pass=="123")
{echo"Welcome";
}
else{
echo "access denied";
}
?>