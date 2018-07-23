<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
  else
  {
	  //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	  if (($_FILES["file"]["type"]=="image/jpeg") &&( ($_FILES["file"]["size"] / 1024) < 500))
	  {
		  if (file_exists("upload/" . $_FILES["file"]["name"]))
		  {
			  echo $_FILES["file"]["name"] . " already exists. ";
		  }
		  else
		  {
			  move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
			  echo " FIle successfully stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		  
	  }
	  else
	  {
		  echo "Either file is too large or is not an \"JPEG image\"";
	  }
  }
		  
		  	  
?> 


</body>
</html>