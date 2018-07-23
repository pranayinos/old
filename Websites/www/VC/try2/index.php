<?php 
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="mysh1.css">
</head>
<script src="jquery-1.3.2.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
function val()
{
	$("#form1").validate();
}
</script>

<body>
<?php 
 require "db.php";
if(isset($_POST['submit']))
{
	$id=$_POST[name];	
	$p=$_POST[pwd];
	$result=mysql_query("select id pwd from data where id='$id' and pwd='$p'",$res);
	$row=mysql_fetch_array($result);
	
	if($row)
	{
		
		$_SESSION['out']=true;
		$_SESSION['id']=$id;
		
		echo "<script> location='welcome.php' </script>" ;
	}
	else
	{
		
		?>
<div class="head" id="head">
<h1 align="center">
 Welcome 
</h1>
<hr />
</div>
<div class="pic" id="pic"> 
<img src="buildings.jpg"> 
</div>

<div  class="body" id="body" onMouseOver="val()">
  <form id="form1" name="form1" method="post" action="#">
    <table width="200" align="center">
      <td colspan="2" align="center"> <font size="+1"> Login </font> &nbsp;</td>
      <tr>
        <td> <label for="name">Username</label>&nbsp;</td>
        <td><input type="text" name="name" id="name" class="required email" /></td>
      </tr>
      <tr>
        <td><label for="pwd">Password</label>&nbsp;</td>
        <td> <input type="password" name="pwd" id="pwd" class="required" />
      </tr>
      <tr>
        <td colspan="2" align="right"><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;</td>
      </tr>
    </table>
    <p id=nw2 align="center"> try again </p>
    <hr>
    <a href="register.php"><p id="newusr" align="right" >New user</a> &nbsp; &nbsp; &nbsp; </p>
    </form>
    </div>

<div id="footer"> 
 <hr>
 <p align="center" id="ftext">Developed here <br> 2013 </p>
</div>  <?php
unset($_POST['submit']);
		echo "<script> unamepass() </script>";
		
	}
}
else
{
?>

<div class="head" id="head">
<h1><p align="center">
 Welcome 
</p> 
</h1>
<hr />
</div>
<div class="pic" id="pic"> 
<img src="buildings.jpg"> 
</div>
<div  class="body" id="body">
  <form id="form1" name="form1" method="post" action="#">
      <hr>
      <table width="200" align="center">
      <td colspan="2" align="center"> <font size="+1"> Login </font> &nbsp;</td>
      <tr>
        <td> <label for="name">Username</label>&nbsp;</td>
        <td><input type="text" name="name" id="name" class="required email" /></td>
      </tr>
      <tr>
        <td><label for="pwd">Password</label>&nbsp;</td>
        <td> <input type="password" name="pwd" id="pwd" class="required" />
      </tr>
      <tr>
        <td colspan="2" align="right"><input type="submit" name="submit" id="submit" value="Submit" />&nbsp;</td>
      </tr>
    </table><br>
    <p id=unp></p>
    <hr>
    <a href="register.php"><p id="newusr" align="right" >New user</a> &nbsp; &nbsp; &nbsp; </p>
    </form>
    </div>

<div id="footer"> 
<hr>
<p align="center" id="ftext">Developed here <br> &copy;2013 </p>
</div>  
<?php  }?>
</body>
</html>
