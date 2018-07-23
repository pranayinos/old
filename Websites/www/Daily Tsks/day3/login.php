<?php
$name=$_GET['u_n'];
$pass=$_GET['pass'];
if($name=="ram"&&$pass=="123")
{echo"Welcome";
}
else{
echo "access denied";
}
?>