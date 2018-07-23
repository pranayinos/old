<?php
$page=$_GET[page];

if($page=="") $page="login";

if($page!="") 
{
include("$page.php");
}


?>