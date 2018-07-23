<?php
session_start();
require "db.php";
$name=$_POST['yourname'];
$email=$_POST['email'];
$company=$_POST['company'];
$message=$_POST['message'];
$ok=0;
//echo $file;
if ($_FILES["file"]["error"] > 0)
   	{
	   echo $_FILES["file"]["error"];
   	}
  	else
   	{
		
		if(($_FILES["file"]["name"]!=""))
		{
			$a=$_FILES['file']['name'];
			$date=time(timestamp);
			$file=$date.$a;
			if (file_exists("upload/".$file))
			{
				$qry="INSERT INTO posts VALUES (NULL ,'$name', '$email', '$company', '$message', '$file',0)";
				$result1=mysql_query($qry,$res);
				if($result1)
				{
					$ok=1;
				}
			}
			else
			{
				move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file);
				$qry="INSERT INTO posts VALUES (NULL ,'$name', '$email', '$company', '$message', '$file', 0)";
				$result1=mysql_query($qry,$res);
				if($result1)
				{
					$ok=1;
				}
			}
		}
	}
   	
if(($_FILES["file"]["name"]==""))
		{
			
			$file="default.jpg";
			$qry="INSERT INTO posts VALUES (NULL ,'$name', '$email', '$company', '$message', '$file',0)";
			$result1=mysql_query($qry,$res);
			if($result1)
				{
					$ok=1;
				}
		}	
//echo "<br>".$_FILES["file"]["tmp_name"]."<br>".$qry;
$_SESSION['ok']=$ok;
?>
<script>
location="testimonials.php?<?php echo $ok ?>";
/*function (id)
{
	location='../testimonials.php?'+id;
}*/
</script>
