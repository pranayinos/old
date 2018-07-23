<?php
require "db.php";
$name=$_POST['yourname'];
$email=$_POST['email'];
$company=$_POST['company'];
$message=$_POST['message'];
$a=$_FILES['file']['name'];
$date=time(timestamp);
$file=$date.$a;
//echo $file;
if ($_FILES["file"]["error"] > 0)
   	{
	   echo $_FILES["file"]["error"];
   	}
  	else
   	{
	   if (file_exists("upload/".$file))
	   {
		   $qry="INSERT INTO posts VALUES (NULL ,'$name', '$email', '$company', '$message', '$file',0)";
			$result1=mysql_query($qry,$res);
	   }
	   else
	   {
		   move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file);
		   $qry="INSERT INTO posts VALUES (NULL ,'$name', '$email', '$company', '$message', '$file', 0)";
			$result1=mysql_query($qry,$res);
		     
	   }
   	}
	
//echo "<br>".$_FILES["file"]["tmp_name"]."<br>".$qry;
?>

-<script>
location="../testimonials.html";
</script>