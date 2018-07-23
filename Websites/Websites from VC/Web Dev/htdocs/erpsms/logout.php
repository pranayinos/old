<?php  
session_start();
setcookie ("vcadminuser", "", time() - 3600); 
setcookie ("vemployeeuser", "", time() - 3600); 
setcookie ("vcstudentuser", "", time() - 3600); 
//echo $vcadminuser= $_COOKIE["vcadminuser"];
 unset($_COOKIE['vcadminuser']);  
  unset($_COOKIE['vemployeeuser']);  
   unset($_COOKIE['vcstudentuser']);  
session_destroy();
header("location:./?page=login&msg=Sucessfully Logout ");
?>