<?php
session_start();
$page=$_GET[page];
if($page=="") $page="loginpage";

if($page!="") 
{
include("loginpage.php");

}


?>