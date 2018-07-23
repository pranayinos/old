<?php
session_start();
?>
<?php
if(isset($_SESSION['id']))
{
?>
<?php
	if($_POST['sub'])
	{
		$id=$_POST['email'];
		require "db.php";
		$qry="select * from data where id='$id'";
		$result=mysql_query($qry,$res);
		$row=mysql_fetch_row($result);
?>
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="as" >
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="frm1" >
  <table border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
    <td>Salutation</td>
    <td><select name="st"><option selected="selected">  </option><option> Mr.</option><option> Ms.</option> <option> Mrs.</option></select></td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name_1" type="text" maxlength="16"  ></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name_2" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name_3" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="addr" type="text" maxlength="64" ></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text" maxlength="24" ></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="stste" type="text" maxlength="24" ></td>
  </tr>
  <tr >
  	<td>Ph. No.&nbsp; &nbsp;    
  	<td  align=><input name="ph_no" type="text" maxlength="11">  	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td  align=><input type="text" name="pic" id="pic">
    </tr>
  <tr >
    <td  align="center" colspan="2"><input name="sub" type="submit" value="submit">  
       &nbsp; &nbsp;<input name="reset" type="reset" value="Reset">
    </tr>
</table>
</form>
<?php
	}
	else
	{	?>
	<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="as" >
<table width="274" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="42">Email</td>
    <td width="197"><input name="email" type="text" maxlength="20"  class="required email"> &nbsp; &nbsp;<input name="sub" type="submit" value="go"></td>
</table>
<form action="#"  enctype="multipart/form-data" method="post" name="frm1" id="frm1" class="frm1" >
<table border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
    <td>Salutation</td>
    <td><select name="st"><option selected="selected">  </option><option> Mr.</option><option> Ms.</option> <option> Mrs.</option></select></td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input name="name_1" type="text" maxlength="16"  ></td>
  </tr>
  <tr>
    <td>Middle Name</td>
    <td><input name="name_2" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="name_3" type="text" maxlength="16" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input name="addr" type="text" maxlength="64" ></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text" maxlength="24" ></td>
  </tr>
  <tr>
    <td>State</td>
    <td><input name="stste" type="text" maxlength="24" ></td>
  </tr>
  <tr >
  	<td>Ph. No.&nbsp; &nbsp;    
  	<td  align=><input name="ph_no" type="text" maxlength="11">  	  </tr>
  <tr >
  <tr >
  	<td>Passport Photo    
  	<td  align=><input type="text" name="pic" id="pic">
    </tr>
  <tr >
    <td  align="center" colspan="2"><input name="sub" type="submit" value="submit">  
       &nbsp; &nbsp;<input name="reset" type="reset" value="Reset">
    </tr>
</table>
</form>
<?php
	}
?>
<?php
}
else
{
	header('location:index.php');
}
