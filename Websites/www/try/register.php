<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User registration </title>
</head>
<style> 
.clas 
{color:red; } 
</style>

<script src="jquery-1.3.2.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
function fun()
{
	$(".as").validate({errorClass:'clas'});
}
</script>

<?php 


if(isset($_POST['sub']))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("try",$con);
	$id=$_POST[email];	
	$result=mysql_query("select id from data where id='$id'",$con);
	$row=mysql_fetch_array($result);
	if($row)
	{
		$found=true;
		unset($_POST['sub']);
	}
	else
	{
		if ($_FILES["pic"]["error"] > 0)
		{
		//echo "Error: " . $_FILES["pic"]["error"] . "<br>";
		}
		else
		{
			//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			if (($_FILES["pic"]["type"]=="image/jpeg") &&(($_FILES["pic"]["size"] / 1024) < 100))
			{
				if (file_exists("upload/" . $_FILES["pic"]["name"]))
				{
					//echo $_FILES["pic"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/" . $_FILES["pic"]["name"]);
					//echo " FIle successfully stored in: " . "upload/" . $_FILES["pic"]["name"];
					$tmpName ="upload/" . $_FILES["pic"]["name"];
					//echo "<br> $tmpName";
					$fp = fopen("$tmpName", 'r');
					$qry="insert into data values('$_POST[st]', '$_POST[name_1]','$_POST[name_2]','$_POST[name_3]','$_POST[addr]','$_POST[city]','$_POST[state]','$_POST[ph_no]','$_POST[email]','$_POST[pass1]','$fp' )";
					$result=mysql_query($qry,$con);	
					if($result)
					{
					?>
     				<script>
					location='registered.php'
					</script>
					<?php
					}
					else
					{
					?> 
					<script> document.write("<h1 align=center>Some error occured try again</h1>")</script><?php
                    }
						
				
				}
			}
			else
			{
				$piclarge=true;
			}
		}
	
			
	}
}
//else
	//{
?>

<body onLoad="fun()">
<div class="head" id="head">
<h1><p align="center">
Registration Form 
</p> 
</h1>
<hr />
</div>
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="as" >
<table border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="113">Email</td>
    <td width="429"><input name="email" type="text" maxlength="20"  class="required email">
    <?php 
	if(isset($found))
	{
		echo "<font color=#FF0000>  user id is already taken</font>";
	}
	?>
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="pass1" type="password" maxlength="16" id="pass" class="required"></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input name="pass2" type="password" maxlength="16"  equalTo="#pass"></td>
  </tr>
  <tr>
    <td>Salutation</td>
    <td><select name="st"><option> Mr.</option><option> Ms.</option> <option> Mrs.</option></select></td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name_1" type="text" maxlength="16"  class="required"></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name_2" type="text" maxlength="16" class="required" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name_3" type="text" maxlength="16" class="required" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="addr" type="text" maxlength="64" class="required"></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text" maxlength="24" class="required"></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="stste" type="text" maxlength="24" class="required"></td>
  </tr>
  <tr >
  	<td>Ph. No.&nbsp; &nbsp;    
  	<td  align=><input name="ph_no" type="text" maxlength="11">  	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td  align=><input type="file" name="pic" id="pic">
     <?php 
	if(isset($piclarge))
	{
		echo "<font color=#FF0000> image is too large</font>";
	}
	?>
    </tr>
  <tr >
    <td  align="center" colspan="2"><input name="sub" type="submit" value="submit">  
      <input name="reset" type="reset" value="Reset">
    </tr>
</table>
</form>
<?php	
//}
?>